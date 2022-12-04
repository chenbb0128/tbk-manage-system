<?php
class KeplerSettledAftermarketQueryservicedetailRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kepler.settled.aftermarket.queryservicedetail";
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
    private  $queryServiceDetailParam;

    public function setQueryServiceDetailParam($queryServiceDetailParam){
        $this->apiParas['queryServiceDetailParam'] = $queryServiceDetailParam;
    }
    public function getQueryServiceDetailParam(){
        return $this->apiParas['queryServiceDetailParam'];
    }
    private  $client;

    public function setClient($client){
        $this->apiParas['client'] = $client;
    }
    public function getClient(){
        return $this->apiParas['client'];
    }
}

?>