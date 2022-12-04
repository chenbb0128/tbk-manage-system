<?php
class JsfXbXBProductServiceQueryProductsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jsf.xb.XBProductService.queryProducts";
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
                                    	                   			private $startRow;
    	                        
	public function setStartRow($startRow){
		$this->startRow = $startRow;
         $this->apiParas["startRow"] = $startRow;
	}

	public function getStartRow(){
	  return $this->startRow;
	}

                        	                   			private $limitCnt;
    	                        
	public function setLimitCnt($limitCnt){
		$this->limitCnt = $limitCnt;
         $this->apiParas["limitCnt"] = $limitCnt;
	}

	public function getLimitCnt(){
	  return $this->limitCnt;
	}

}





        
 

