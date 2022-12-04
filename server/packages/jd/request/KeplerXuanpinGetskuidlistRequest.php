<?php
class KeplerXuanpinGetskuidlistRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.xuanpin.getskuidlist";
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
    private  $pkgId;

    public function setPkgId($pkgId){
        $this->apiParas['pkgId'] = $pkgId;
    }
    public function getPkgId(){
        return $this->apiParas['pkgId'];
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