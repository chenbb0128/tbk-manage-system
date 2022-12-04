<?php
class YsdkMemberApplyJsfServiceQueryMemberStatusRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ysdk.MemberApplyJsfService.queryMemberStatus";
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
                                    	                   			private $requestId;
    	                        
	public function setRequestId($requestId){
		$this->requestId = $requestId;
         $this->apiParas["requestId"] = $requestId;
	}

	public function getRequestId(){
	  return $this->requestId;
	}

                        	                   			private $platformCode;
    	                        
	public function setPlatformCode($platformCode){
		$this->platformCode = $platformCode;
         $this->apiParas["platformCode"] = $platformCode;
	}

	public function getPlatformCode(){
	  return $this->platformCode;
	}

}





        
 

