<?php
class KplOpenNosecretpayClosesignRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.nosecretpay.closesign";
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
    private  $deviceId;

    public function setDeviceId($deviceId){
        $this->apiParas['deviceId'] = $deviceId;
    }
    public function getDeviceId(){
        return $this->apiParas['deviceId'];
    }
    private  $ptKey;

    public function setPtKey($ptKey){
        $this->apiParas['ptKey'] = $ptKey;
    }
    public function getPtKey(){
        return $this->apiParas['ptKey'];
    }
}

?>