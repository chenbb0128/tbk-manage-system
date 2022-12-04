<?php
class KplOpenBatchConvertCpslinkRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.batch.convert.cpslink";
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
    private  $KeplerUrlparam;

    public function setKeplerUrlparam($KeplerUrlparam){
        $this->apiParas['KeplerUrlparam'] = $KeplerUrlparam;
    }
    public function getKeplerUrlparam(){
        return $this->apiParas['KeplerUrlparam'];
    }
}

?>