<?php
class KplOpenXuanpinSearchgoodsRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.xuanpin.searchgoods";
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
    private  $queryParam;

    public function setQueryParam($queryParam){
        $this->apiParas['queryParam'] = $queryParam;
    }
    public function getQueryParam(){
        return $this->apiParas['queryParam'];
    }
    private  $pageParam;

    public function setPageParam($pageParam){
        $this->apiParas['pageParam'] = $pageParam;
    }
    public function getPageParam(){
        return $this->apiParas['pageParam'];
    }
    private  $orderField;

    public function setOrderField($orderField){
        $this->apiParas['orderField'] = $orderField;
    }
    public function getOrderField(){
        return $this->apiParas['orderField'];
    }
}

?>