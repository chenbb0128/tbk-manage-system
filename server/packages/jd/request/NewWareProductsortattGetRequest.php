<?php
class NewWareProductsortattGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.new.ware.productsortatt.get";
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
                                    	                   			private $skuid;
    	                        
	public function setSkuid($skuid){
		$this->skuid = $skuid;
         $this->apiParas["skuid"] = $skuid;
	}

	public function getSkuid(){
	  return $this->skuid;
	}

}





        
 

