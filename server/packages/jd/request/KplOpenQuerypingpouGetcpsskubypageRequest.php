<?php
class KplOpenQuerypingpouGetcpsskubypageRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.querypingpou.getcpsskubypage";
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
    private  $pool;

    public function setPool($pool){
        $this->apiParas['pool'] = $pool;
    }
    public function getPool(){
        return $this->apiParas['pool'];
    }
    private  $size;

    public function setSize($size){
        $this->apiParas['size'] = $size;
    }
    public function getSize(){
        return $this->apiParas['size'];
    }
    private  $offset;

    public function setOffset($offset){
        $this->apiParas['offset'] = $offset;
    }
    public function getOffset(){
        return $this->apiParas['offset'];
    }
}

?>