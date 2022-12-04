<?php
class KplOpenRankInfoGatherServiceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kpl.open.RankInfoGatherService";
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
    private  $clientParam;

    public function setClientParam($clientParam){
        $this->apiParas['clientParam'] = $clientParam;
    }
    public function getClientParam(){
        return $this->apiParas['clientParam'];
    }
    private  $rankParam;

    public function setRankParam($rankParam){
        $this->apiParas['rankParam'] = $rankParam;
    }
    public function getRankParam(){
        return $this->apiParas['rankParam'];
    }
}

?>