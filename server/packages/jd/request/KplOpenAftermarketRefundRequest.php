<?php
class KplOpenAftermarketRefundRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.aftermarket.refund";
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
    private  $afsRefundDetailDto;

    public function setAfsRefundDetailDto($afsRefundDetailDto){
        $this->apiParas['afsRefundDetailDto'] = $afsRefundDetailDto;
    }
    public function getAfsRefundDetailDto(){
        return $this->apiParas['afsRefundDetailDto'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}

?>