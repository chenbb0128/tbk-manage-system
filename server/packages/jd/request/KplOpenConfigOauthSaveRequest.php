<?php
class KplOpenConfigOauthSaveRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.config.oauth.save";
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
    private  $code;

    public function setCode($code){
        $this->apiParas['code'] = $code;
    }
    public function getCode(){
        return $this->apiParas['code'];
    }
    private  $tgt;

    public function setTgt($tgt){
        $this->apiParas['tgt'] = $tgt;
    }
    public function getTgt(){
        return $this->apiParas['tgt'];
    }
    private  $appId;

    public function setAppId($appId){
        $this->apiParas['appId'] = $appId;
    }
    public function getAppId(){
        return $this->apiParas['appId'];
    }
    private  $callSource;

    public function setCallSource($callSource){
        $this->apiParas['callSource'] = $callSource;
    }
    public function getCallSource(){
        return $this->apiParas['callSource'];
    }
    private  $callTarget;

    public function setCallTarget($callTarget){
        $this->apiParas['callTarget'] = $callTarget;
    }
    public function getCallTarget(){
        return $this->apiParas['callTarget'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
    private  $clientIp;

    public function setClientIp($clientIp){
        $this->apiParas['clientIp'] = $clientIp;
    }
    public function getClientIp(){
        return $this->apiParas['clientIp'];
    }
}

?>