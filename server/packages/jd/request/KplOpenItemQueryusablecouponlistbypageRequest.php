<?php
class KplOpenItemQueryusablecouponlistbypageRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.item.queryusablecouponlistbypage";
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
    private  $uid;

    public function setUid($uid){
        $this->apiParas['uid'] = $uid;
    }
    public function getUid(){
        return $this->apiParas['uid'];
    }
    private  $pageNum;

    public function setPageNum($pageNum){
        $this->apiParas['pageNum'] = $pageNum;
    }
    public function getPageNum(){
        return $this->apiParas['pageNum'];
    }
}

?>