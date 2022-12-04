<?php
class OrderCheckDlokOrderQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.order.checkDlokOrder.query";
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
    private  $date;

    public function setDate($date){
        $this->apiParas['date'] = $date;
    }
    public function getDate(){
        return $this->apiParas['date'];
    }
    private  $page;

    public function setPage($page){
        $this->apiParas['page'] = $page;
    }
    public function getPage(){
        return $this->apiParas['page'];
    }
}

?>