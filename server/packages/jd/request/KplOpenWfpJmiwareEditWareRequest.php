<?php
class KplOpenWfpJmiwareEditWareRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.wfp.jmiware.editWare";
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
    private  $interfaceName;

    public function setInterfaceName($interfaceName){
        $this->apiParas['interfaceName'] = $interfaceName;
    }
    public function getInterfaceName(){
        return $this->apiParas['interfaceName'];
    }
    private  $methodName;

    public function setMethodName($methodName){
        $this->apiParas['methodName'] = $methodName;
    }
    public function getMethodName(){
        return $this->apiParas['methodName'];
    }
    private  $param;

    public function setParam($param){
        $this->apiParas['param'] = $param;
    }
    public function getParam(){
        return $this->apiParas['param'];
    }
}

?>