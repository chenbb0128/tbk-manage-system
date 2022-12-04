<?php
class ProductCheckAreaLimitQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.product.checkAreaLimit.query";
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
    private  $skuIds;

    public function setSkuIds($skuIds){
        $this->apiParas['skuIds'] = $skuIds;
    }
    public function getSkuIds(){
        return $this->apiParas['skuIds'];
    }
    private  $province;

    public function setProvince($province){
        $this->apiParas['province'] = $province;
    }
    public function getProvince(){
        return $this->apiParas['province'];
    }
    private  $city;

    public function setCity($city){
        $this->apiParas['city'] = $city;
    }
    public function getCity(){
        return $this->apiParas['city'];
    }
    private  $county;

    public function setCounty($county){
        $this->apiParas['county'] = $county;
    }
    public function getCounty(){
        return $this->apiParas['county'];
    }
    private  $town;

    public function setTown($town){
        $this->apiParas['town'] = $town;
    }
    public function getTown(){
        return $this->apiParas['town'];
    }
}

?>