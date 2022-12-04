<?php
class KeplerPushmsgGetAppConfigTemplateListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.kepler.pushmsg.getAppConfigTemplateList";
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
    private  $appid;

    public function setAppid($appid){
        $this->apiParas['appid'] = $appid;
    }
    public function getAppid(){
        return $this->apiParas['appid'];
    }
    private  $openid;

    public function setOpenid($openid){
        $this->apiParas['openid'] = $openid;
    }
    public function getOpenid(){
        return $this->apiParas['openid'];
    }
    private  $maps;

    public function setMaps($maps){
        $this->apiParas['maps'] = $maps;
    }
    public function getMaps(){
        return $this->apiParas['maps'];
    }
}

?>