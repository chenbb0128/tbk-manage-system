<?php
class KplOpenJsfTestRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.jsf.test";
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
    private  $name;

    public function setName($name){
        $this->apiParas['name'] = $name;
    }
    public function getName(){
        return $this->apiParas['name'];
    }
    private  $ss;

    public function setSs($ss){
        $this->apiParas['ss'] = $ss;
    }
    public function getSs(){
        return $this->apiParas['ss'];
    }
}

?>