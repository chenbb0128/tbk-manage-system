<?php
class PopOrderGetmobilelistRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.order.getmobilelist";
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
                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $region;
    	                        
	public function setRegion($region){
		$this->region = $region;
         $this->apiParas["region"] = $region;
	}

	public function getRegion(){
	  return $this->region;
	}

                        	                                                 	                        	                                                                                                                                                                                                                                                                                                               private $orderId;
                              public function setOrderId($orderId ){
                 $this->orderId=$orderId;
                 $this->apiParas["orderId"] = $orderId;
              }

              public function getOrderId(){
              	return $this->orderId;
              }
                                                                                                                                        	                        	}





        
 

