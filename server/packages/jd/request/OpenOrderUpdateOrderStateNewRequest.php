<?php
class OpenOrderUpdateOrderStateNewRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.open.order.updateOrderStateNew";
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
    private  $orderExtInfo;

    public function setOrderExtInfo($orderExtInfo){
        $this->apiParas['orderExtInfo'] = $orderExtInfo;
    }
    public function getOrderExtInfo(){
        return $this->apiParas['orderExtInfo'];
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