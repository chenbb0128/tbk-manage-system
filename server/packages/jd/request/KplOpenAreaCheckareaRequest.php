<?php
class KplOpenAreaCheckareaRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.area.checkarea";
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
    private  $provinceId;

    public function setProvinceId($provinceId){
        $this->apiParas['provinceId'] = $provinceId;
    }
    public function getProvinceId(){
        return $this->apiParas['provinceId'];
    }
    private  $cityId;

    public function setCityId($cityId){
        $this->apiParas['cityId'] = $cityId;
    }
    public function getCityId(){
        return $this->apiParas['cityId'];
    }
    private  $countyId;

    public function setCountyId($countyId){
        $this->apiParas['countyId'] = $countyId;
    }
    public function getCountyId(){
        return $this->apiParas['countyId'];
    }
    private  $townId;

    public function setTownId($townId){
        $this->apiParas['townId'] = $townId;
    }
    public function getTownId(){
        return $this->apiParas['townId'];
    }
}

?>