<?php
class KplOpenClientGetunplRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.client.getunpl";
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
    private  $jda;

    public function setJda($jda){
        $this->apiParas['jda'] = $jda;
    }
    public function getJda(){
        return $this->apiParas['jda'];
    }
    private  $url;

    public function setUrl($url){
        $this->apiParas['url'] = $url;
    }
    public function getUrl(){
        return $this->apiParas['url'];
    }
    private  $siteId;

    public function setSiteId($siteId){
        $this->apiParas['siteId'] = $siteId;
    }
    public function getSiteId(){
        return $this->apiParas['siteId'];
    }
    private  $ip;

    public function setIp($ip){
        $this->apiParas['ip'] = $ip;
    }
    public function getIp(){
        return $this->apiParas['ip'];
    }
    private  $ua;

    public function setUa($ua){
        $this->apiParas['ua'] = $ua;
    }
    public function getUa(){
        return $this->apiParas['ua'];
    }
}

?>