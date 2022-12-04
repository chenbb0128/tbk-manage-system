<?php
class JosSecretApiReportGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.secret.api.report.get";
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
                                                        		                                    	                   			private $accessToken;
    	                                                            
	public function setAccessToken($accessToken){
		$this->accessToken = $accessToken;
         $this->apiParas["access_token"] = $accessToken;
	}

	public function getAccessToken(){
	  return $this->accessToken;
	}

                                            		                                    	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                   			private $text;
    	                        
	public function setText($text){
		$this->text = $text;
         $this->apiParas["text"] = $text;
	}

	public function getText(){
	  return $this->text;
	}

                        	                   			private $attribute;
    	                        
	public function setAttribute($attribute){
		$this->attribute = $attribute;
         $this->apiParas["attribute"] = $attribute;
	}

	public function getAttribute(){
	  return $this->attribute;
	}

                                                    	                   			private $customerUserId;
    	                                                                        
	public function setCustomerUserId($customerUserId){
		$this->customerUserId = $customerUserId;
         $this->apiParas["customer_user_id"] = $customerUserId;
	}

	public function getCustomerUserId(){
	  return $this->customerUserId;
	}

                        	                        	                   			private $serverUrl;
    	                                                            
	public function setServerUrl($serverUrl){
		$this->serverUrl = $serverUrl;
         $this->apiParas["server_url"] = $serverUrl;
	}

	public function getServerUrl(){
	  return $this->serverUrl;
	}

                            }





        
 

