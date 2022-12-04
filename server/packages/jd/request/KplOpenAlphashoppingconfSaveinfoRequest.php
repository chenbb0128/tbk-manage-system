<?php
class KplOpenAlphashoppingconfSaveinfoRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.alphashoppingconf.saveinfo";
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
    private  $dataJson;

    public function setDataJson($dataJson){
        $this->apiParas['dataJson'] = $dataJson;
    }
    public function getDataJson(){
        return $this->apiParas['dataJson'];
    }
    private  $ptKey;

    public function setPtKey($ptKey){
        $this->apiParas['ptKey'] = $ptKey;
    }
    public function getPtKey(){
        return $this->apiParas['ptKey'];
    }
}

?>