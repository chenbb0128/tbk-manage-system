<?php

class CheckSign
{

    public $host='';//请求地址
    public $appKey='';//app_key
    public $appSecret='';//app_secret
    public $version='';//版本号

    /**参数加密
     * @param $data
     * @param $appSecret
     * @return string
     */
    function makeSign($data, $appSecret)
    {
        ksort($data);
        $str = '';
        foreach ($data as $k => $v) {
            $str .= '&' . $k . '=' . $v;
        }
        $str = trim($str, '&');
        $sign = strtoupper(md5($str . '&key=' . $appSecret));
        return $sign;
    }

    function request($params,$type="GET"){
        $host = $this->host;
        $appKey = $this->appKey;
        $appSecret = $this->appSecret;
        $version = $this->version;
        if($host=='' || $appKey=='' || $appSecret == '' || $version==''){
            return json_encode(array('code'=>-10001,'msg'=>"请完善参数"));
        }
        $type = strtoupper($type);
        if(!in_array($type,array("GET","POST"))){
            return json_encode(array('code'=>-10001,'msg'=>"只支持GET/POST请求"));
        }
        //默认必传参数
        $data = [
            'appKey' => $appKey,
            'version' => $version,
        ];
        //加密的参数
        $data = array_merge($params, $data);
        $data['sign'] = self::makeSign($data, $appSecret);
        try {
            if($type == 'POST') {
                //拼接请求地址
                $url = $host;
                //执行请求获取数据
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                //https调用
                //curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
                //curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
                $header = [
                    'Content-Type: application/json'
                ];
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                $output = curl_exec($ch);
                $a = curl_error($ch);
                if(!empty($a)){
                    return json_encode(array('code'=>-10003,'msg'=>$a));
                }
                curl_close($ch);
                return $output;
            }else{
                //拼接请求地址
                $url = $host . '?' . http_build_query($data);
                //执行请求获取数据
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_TIMEOUT, 10);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                $output = curl_exec($ch);
                $a = curl_error($ch);
                if(!empty($a)){
                    return json_encode(array('code'=>-10003,'msg'=>$a));
                }
                curl_close($ch);
                return $output;
            }
        }catch (Exception $e){
            var_dump($e->getMessage());
            return json_encode(array('code'=>-10002,'msg'=>"请求超时或异常，请重试"));
        }
    }
}

?>