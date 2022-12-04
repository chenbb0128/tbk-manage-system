<?php
class KeplerXuanpinCpsurlConvertRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.xuanpin.cpsurl.convert";
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
    private  $pin;

    public function setPin($pin){
        $this->apiParas['pin'] = $pin;
    }
    public function getPin(){
        return $this->apiParas['pin'];
    }
    private  $webId;

    public function setWebId($webId){
        $this->apiParas['webId'] = $webId;
    }
    public function getWebId(){
        return $this->apiParas['webId'];
    }
    private  $positionId;

    public function setPositionId($positionId){
        $this->apiParas['positionId'] = $positionId;
    }
    public function getPositionId(){
        return $this->apiParas['positionId'];
    }
    private  $materalId;

    public function setMateralId($materalId){
        $this->apiParas['materalId'] = $materalId;
    }
    public function getMateralId(){
        return $this->apiParas['materalId'];
    }
}

?>