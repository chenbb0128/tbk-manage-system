<?php
class KplOpenItemFindcanusecouponsRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.item.findcanusecoupons";
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
    private  $cid;

    public function setCid($cid){
        $this->apiParas['cid'] = $cid;
    }
    public function getCid(){
        return $this->apiParas['cid'];
    }
    private  $sku;

    public function setSku($sku){
        $this->apiParas['sku'] = $sku;
    }
    public function getSku(){
        return $this->apiParas['sku'];
    }
}

?>