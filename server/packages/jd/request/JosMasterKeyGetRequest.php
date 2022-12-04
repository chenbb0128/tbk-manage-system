<?php
class JosMasterKeyGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jos.master.key.get";
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
                                                        		                                    	                   			private $sig;
    	                        
	public function setSig($sig){
		$this->sig = $sig;
         $this->apiParas["sig"] = $sig;
	}

	public function getSig(){
	  return $this->sig;
	}

                                            		                                    	                   			private $sdkVer;
    	                                                            
	public function setSdkVer($sdkVer){
		$this->sdkVer = $sdkVer;
         $this->apiParas["sdk_ver"] = $sdkVer;
	}

	public function getSdkVer(){
	  return $this->sdkVer;
	}

                        	                   			private $ts;
    	                        
	public function setTs($ts){
		$this->ts = $ts;
         $this->apiParas["ts"] = $ts;
	}

	public function getTs(){
	  return $this->ts;
	}

                        	                   			private $tid;
    	                        
	public function setTid($tid){
		$this->tid = $tid;
         $this->apiParas["tid"] = $tid;
	}

	public function getTid(){
	  return $this->tid;
	}

                                                        }





        
 

