<?php
class KeplerTradeSubmitRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.trade.submit";
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
    private  $cartReq;

    public function setCartReq($cartReq){
        $this->apiParas['cartReq'] = $cartReq;
    }
    public function getCartReq(){
        return $this->apiParas['cartReq'];
    }
    private  $orderParam;

    public function setOrderParam($orderParam){
        $this->apiParas['orderParam'] = $orderParam;
    }
    public function getOrderParam(){
        return $this->apiParas['orderParam'];
    }
}

?>