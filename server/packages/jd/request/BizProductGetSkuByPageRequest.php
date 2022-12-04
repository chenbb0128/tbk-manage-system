<?php
class BizProductGetSkuByPageRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.biz.product.getSkuByPage";
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
    private  $pageNum;

    public function setPageNum($pageNum){
        $this->apiParas['pageNum'] = $pageNum;
    }
    public function getPageNum(){
        return $this->apiParas['pageNum'];
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