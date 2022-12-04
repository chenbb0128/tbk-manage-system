<?php
class KplOpenAftersaleOrderidRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.aftersale.orderid";
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
    private  $refId;

    public function setRefId($refId){
        $this->apiParas['refId'] = $refId;
    }
    public function getRefId(){
        return $this->apiParas['refId'];
    }
    private  $orderId;

    public function setOrderId($orderId){
        $this->apiParas['orderId'] = $orderId;
    }
    public function getOrderId(){
        return $this->apiParas['orderId'];
    }
}

?>