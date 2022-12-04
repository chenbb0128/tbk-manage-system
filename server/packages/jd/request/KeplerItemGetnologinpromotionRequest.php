<?php
class KeplerItemGetnologinpromotionRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.item.getnologinpromotion";
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
    private  $skuids;

    public function setSkuids($skuids){
        $this->apiParas['skuids'] = $skuids;
    }
    public function getSkuids(){
        return $this->apiParas['skuids'];
    }
    private  $area;

    public function setArea($area){
        $this->apiParas['area'] = $area;
    }
    public function getArea(){
        return $this->apiParas['area'];
    }
    private  $venderId;

    public function setVenderId($venderId){
        $this->apiParas['venderId'] = $venderId;
    }
    public function getVenderId(){
        return $this->apiParas['venderId'];
    }
    private  $appid;

    public function setAppid($appid){
        $this->apiParas['appid'] = $appid;
    }
    public function getAppid(){
        return $this->apiParas['appid'];
    }
}

?>