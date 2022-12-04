<?php
class KeplerXuanpinSearchSkuByCategoryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.xuanpin.search.sku.by.category";
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
    private  $category;

    public function setCategory($category){
        $this->apiParas['category'] = $category;
    }
    public function getCategory(){
        return $this->apiParas['category'];
    }
    private  $pageSize;

    public function setPageSize($pageSize){
        $this->apiParas['pageSize'] = $pageSize;
    }
    public function getPageSize(){
        return $this->apiParas['pageSize'];
    }
    private  $pageNo;

    public function setPageNo($pageNo){
        $this->apiParas['pageNo'] = $pageNo;
    }
    public function getPageNo(){
        return $this->apiParas['pageNo'];
    }
}

?>