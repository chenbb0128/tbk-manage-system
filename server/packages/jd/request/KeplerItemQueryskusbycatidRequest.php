<?php
class KeplerItemQueryskusbycatidRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.item.queryskusbycatid";
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
    private  $catId;

    public function setCatId($catId){
        $this->apiParas['catId'] = $catId;
    }
    public function getCatId(){
        return $this->apiParas['catId'];
    }
    private  $scrollId;

    public function setScrollId($scrollId){
        $this->apiParas['scrollId'] = $scrollId;
    }
    public function getScrollId(){
        return $this->apiParas['scrollId'];
    }
}

?>