<?php
class KplOpenWeiboCartAddRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.weibo.cart.add";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $xid;

    public function setXid($xid){
        $this->apiParas['xid'] = $xid;
    }
    public function getXid(){
        return $this->apiParas['xid'];
    }
    private  $url;

    public function setUrl($url){
        $this->apiParas['url'] = $url;
    }
    public function getUrl(){
        return $this->apiParas['url'];
    }
    private  $skuId;

    public function setSkuId($skuId){
        $this->apiParas['skuId'] = $skuId;
    }
    public function getSkuId(){
        return $this->apiParas['skuId'];
    }
    private  $ip;

    public function setIp($ip){
        $this->apiParas['ip'] = $ip;
    }
    public function getIp(){
        return $this->apiParas['ip'];
    }
    private  $appname;

    public function setAppname($appname){
        $this->apiParas['appname'] = $appname;
    }
    public function getAppname(){
        return $this->apiParas['appname'];
    }
    private  $timestamp;

    public function setTimestamp($timestamp){
        $this->apiParas['timestamp'] = $timestamp;
    }
    public function getTimestamp(){
        return $this->apiParas['timestamp'];
    }
    private  $deviceid;

    public function setDeviceid($deviceid){
        $this->apiParas['deviceid'] = $deviceid;
    }
    public function getDeviceid(){
        return $this->apiParas['deviceid'];
    }
    private  $token;

    public function setToken($token){
        $this->apiParas['token'] = $token;
    }
    public function getToken(){
        return $this->apiParas['token'];
    }
    private  $sessionid;

    public function setSessionid($sessionid){
        $this->apiParas['sessionid'] = $sessionid;
    }
    public function getSessionid(){
        return $this->apiParas['sessionid'];
    }
    private  $signature;

    public function setSignature($signature){
        $this->apiParas['signature'] = $signature;
    }
    public function getSignature(){
        return $this->apiParas['signature'];
    }
    private  $applicationname;

    public function setApplicationname($applicationname){
        $this->apiParas['applicationname'] = $applicationname;
    }
    public function getApplicationname(){
        return $this->apiParas['applicationname'];
    }
    private  $packagename;

    public function setPackagename($packagename){
        $this->apiParas['packagename'] = $packagename;
    }
    public function getPackagename(){
        return $this->apiParas['packagename'];
    }
    private  $applicationmd5;

    public function setApplicationmd5($applicationmd5){
        $this->apiParas['applicationmd5'] = $applicationmd5;
    }
    public function getApplicationmd5(){
        return $this->apiParas['applicationmd5'];
    }
    private  $ua;

    public function setUa($ua){
        $this->apiParas['ua'] = $ua;
    }
    public function getUa(){
        return $this->apiParas['ua'];
    }
    private  $os;

    public function setOs($os){
        $this->apiParas['os'] = $os;
    }
    public function getOs(){
        return $this->apiParas['os'];
    }
    private  $osversion;

    public function setOsversion($osversion){
        $this->apiParas['osversion'] = $osversion;
    }
    public function getOsversion(){
        return $this->apiParas['osversion'];
    }
}

?>