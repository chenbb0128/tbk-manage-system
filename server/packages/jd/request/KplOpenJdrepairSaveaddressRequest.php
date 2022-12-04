<?php
class KplOpenJdrepairSaveaddressRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.jdrepair.saveaddress";
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
    private  $addressId;

    public function setAddressId($addressId){
        $this->apiParas['addressId'] = $addressId;
    }
    public function getAddressId(){
        return $this->apiParas['addressId'];
    }
    private  $state;

    public function setState($state){
        $this->apiParas['state'] = $state;
    }
    public function getState(){
        return $this->apiParas['state'];
    }
}

?>