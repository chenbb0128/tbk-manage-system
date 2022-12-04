<?php
class KplOpenYaoPropertyUpdateRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.yao.property.update";
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
    private  $venderId;

    public function setVenderId($venderId){
        $this->apiParas['venderId'] = $venderId;
    }
    public function getVenderId(){
        return $this->apiParas['venderId'];
    }
    private  $wareList;

    public function setWareList($wareList){
        $this->apiParas['wareList'] = $wareList;
    }
    public function getWareList(){
        return $this->apiParas['wareList'];
    }
}

?>