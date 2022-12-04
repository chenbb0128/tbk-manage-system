<?php
class WareProductCatelogyListGetRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.product.catelogy.list.get";
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
    private  $catelogyId;

    public function setCatelogyId($catelogyId){
        $this->apiParas['catelogyId'] = $catelogyId;
    }
    public function getCatelogyId(){
        return $this->apiParas['catelogyId'];
    }
}

?>