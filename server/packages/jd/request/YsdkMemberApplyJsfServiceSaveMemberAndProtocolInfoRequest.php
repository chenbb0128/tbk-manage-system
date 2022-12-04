<?php
class YsdkMemberApplyJsfServiceSaveMemberAndProtocolInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ysdk.MemberApplyJsfService.saveMemberAndProtocolInfo";
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
                                    	                   			private $memberAndProtocolInfoJson;
    	                        
	public function setMemberAndProtocolInfoJson($memberAndProtocolInfoJson){
		$this->memberAndProtocolInfoJson = $memberAndProtocolInfoJson;
         $this->apiParas["memberAndProtocolInfoJson"] = $memberAndProtocolInfoJson;
	}

	public function getMemberAndProtocolInfoJson(){
	  return $this->memberAndProtocolInfoJson;
	}

}





        
 

