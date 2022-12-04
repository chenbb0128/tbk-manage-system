<?php
class WirelessWarePriceGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.wireless.ware.price.get";
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
                                    	                   			private $skuIds;
    	                                                            
	public function setSkuIds($skuIds){
		$this->skuIds = $skuIds;
         $this->apiParas["sku_ids"] = $skuIds;
	}

	public function getSkuIds(){
	  return $this->skuIds;
	}

                        	                   			private $origin;
    	                        
	public function setOrigin($origin){
		$this->origin = $origin;
         $this->apiParas["origin"] = $origin;
	}

	public function getOrigin(){
	  return $this->origin;
	}

}





        
 

