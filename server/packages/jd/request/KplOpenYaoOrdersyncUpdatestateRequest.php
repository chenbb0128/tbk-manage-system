<?php
class KplOpenYaoOrdersyncUpdatestateRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.yao.ordersync.updatestate";
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
    private  $orderId;

    public function setOrderId($orderId){
        $this->apiParas['orderId'] = $orderId;
    }
    public function getOrderId(){
        return $this->apiParas['orderId'];
    }
    private  $deliverInfo;

    public function setDeliverInfo($deliverInfo){
        $this->apiParas['deliverInfo'] = $deliverInfo;
    }
    public function getDeliverInfo(){
        return $this->apiParas['deliverInfo'];
    }
}

?>