<?php
class KeplerTradeGetstockRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.trade.getstock";
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
    private  $skus;

    public function setSkus($skus){
        $this->apiParas['skus'] = $skus;
    }
    public function getSkus(){
        return $this->apiParas['skus'];
    }
    private  $area;

    public function setArea($area){
        $this->apiParas['area'] = $area;
    }
    public function getArea(){
        return $this->apiParas['area'];
    }
    private  $category;

    public function setCategory($category){
        $this->apiParas['category'] = $category;
    }
    public function getCategory(){
        return $this->apiParas['category'];
    }
    private  $venderId;

    public function setVenderId($venderId){
        $this->apiParas['venderId'] = $venderId;
    }
    public function getVenderId(){
        return $this->apiParas['venderId'];
    }
}

?>