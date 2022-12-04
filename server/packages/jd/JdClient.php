<?php
class JdClient
{
	public $serverUrl = "https://api.jd.com/routerjson";

	public $accessToken;

	public $connectTimeout = 0;

	public $readTimeout = 0;

	public $appKey;

	public $appSecret;

	public $version = "2.0";

	public $format = "json";

	private $charset_utf8 = "UTF-8";

	private $json_param_key = "360buy_param_json";

	protected function generateSign($params)
	{
		ksort($params);
		$stringToBeSigned = $this->appSecret;
		foreach ($params as $k => $v)
		{
			if("@" != substr($v, 0, 1))
			{
				$stringToBeSigned .= "$k$v";
			}
		}
		unset($k, $v);
		$stringToBeSigned .= $this->appSecret;
		return strtoupper(md5($stringToBeSigned));
	}

	public function curl($url, $postFields = null)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_FAILONERROR, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if ($this->readTimeout) {
			curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
		}
		if ($this->connectTimeout) {
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
		}
		//https 请求
		if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		}

		if (is_array($postFields) && 0 < count($postFields))
		{
			$postBodyString = "";
			$postMultipart = false;
			foreach ($postFields as $k => $v)
			{
				if("@" != substr($v, 0, 1))//判断是不是文件上传
				{
					$postBodyString .= "$k=" . urlencode($v) . "&";
				}
				else//文件上传用multipart/form-data，否则用www-form-urlencoded
				{
					$postMultipart = true;
				}
			}
			unset($k, $v);
			curl_setopt($ch, CURLOPT_POST, true);
			if ($postMultipart)
			{
				curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
			}
			else
			{
				curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
			}
		}
		$reponse = curl_exec($ch);

		if (curl_errno($ch))
		{
			throw new Exception(curl_error($ch),0);
		}
		else
		{
			$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if (200 !== $httpStatusCode)
			{
				throw new Exception($reponse,$httpStatusCode);
			}
		}
		curl_close($ch);
		return $reponse;
	}

	public function execute($request, $access_token = null)
	{
		//组装系统参数
        $sysParams["app_key"] = $this->appKey;
        $version = $request->getVersion();

        $sysParams["v"] = empty($version)? $this->version:$version;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = $this->getCurrentTimeFormatted();
        if (null != $access_token)
        {
           $sysParams["access_token"] = $access_token;
        }

		//获取业务参数
		$apiParams = $request->getApiParas();
		$sysParams[$this->json_param_key] = $apiParams;

		//签名
		$sysParams["sign"] = $this->generateSign($sysParams);
		//系统参数放入GET请求串
		$requestUrl = $this->serverUrl . "?";
		foreach ($sysParams as $sysParamKey => $sysParamValue)
		{
			$requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
		}
		//发起HTTP请求
		try
		{
			$resp = $this->curl($requestUrl, $apiParams);
		}
		catch (Exception $e)
		{
			$result->code = $e->getCode();
			$result->msg = $e->getMessage();
			return $result;
		}

		//解析JD返回结果
		$respWellFormed = false;
		if ("json" == $this->format)
		{
			$respObject = json_decode($resp);
			if (null !== $respObject)
			{
				$respWellFormed = true;
//				foreach ($respObject as $propKey => $propValue)
//				{
//					$respObject = $propValue;
//				}
			}
		}
		else if("xml" == $this->format)
		{
			$respObject = @simplexml_load_string($resp);
			if (false !== $respObject)
			{
				$respWellFormed = true;
			}
		}

		//返回的HTTP文本不是标准JSON或者XML，记下错误日志
		if (false === $respWellFormed)
		{
			$result->code = 0;
			$result->msg = "HTTP_RESPONSE_NOT_WELL_FORMED";
			return $result;
		}

		return $respObject;
	}

	public function exec($paramsArray)
	{
		if (!isset($paramsArray["method"]))
		{
			trigger_error("No api name passed");
		}
		$inflector = new LtInflector;
		$inflector->conf["separator"] = ".";
		$requestClassName = ucfirst($inflector->camelize(substr($paramsArray["method"], 7))) . "Request";
		if (!class_exists($requestClassName))
		{
			trigger_error("No such api: " . $paramsArray["method"]);
		}

		$session = isset($paramsArray["session"]) ? $paramsArray["session"] : null;

		$req = new $requestClassName;
		foreach($paramsArray as $paraKey => $paraValue)
		{
			$inflector->conf["separator"] = "_";
			$setterMethodName = $inflector->camelize($paraKey);
			$inflector->conf["separator"] = ".";
			$setterMethodName = "set" . $inflector->camelize($setterMethodName);
			if (method_exists($req, $setterMethodName))
			{
				$req->$setterMethodName($paraValue);
			}
		}
		return $this->execute($req, $session);
	}

    private function getCurrentTimeFormatted()
    {
        return  date("Y-m-d H:i:s").'.000'.$this->getStandardOffsetUTC(date_default_timezone_get());
    }

    private function getStandardOffsetUTC($timezone)
    {
        if($timezone == 'UTC') {
            return '+0000';
        } else {
            $timezone = new DateTimeZone($timezone);
            $transitions = array_slice($timezone->getTransitions(), -3, null, true);

            foreach (array_reverse($transitions, true) as $transition)
            {
                if ($transition['isdst'] == 1)
                {
                    continue;
                }

                return sprintf('%+03d%02u', $transition['offset'] / 3600, abs($transition['offset']) % 3600 / 60);
            }

            return false;
        }
    }
}
