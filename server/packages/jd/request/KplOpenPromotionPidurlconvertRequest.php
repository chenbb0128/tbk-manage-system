<?php
class KplOpenPromotionPidurlconvertRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.promotion.pidurlconvert";
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
    private  $webId;

    public function setWebId($webId){
        $this->apiParas['webId'] = $webId;
    }
    public function getWebId(){
        return $this->apiParas['webId'];
    }
    private  $positionId;

    public function setPositionId($positionId){
        $this->apiParas['positionId'] = $positionId;
    }
    public function getPositionId(){
        return $this->apiParas['positionId'];
    }
    private  $materalId;

    public function setMateralId($materalId){
        $this->apiParas['materalId'] = $materalId;
    }
    public function getMateralId(){
        return $this->apiParas['materalId'];
    }
    private  $pid;

    public function setPid($pid){
        $this->apiParas['pid'] = $pid;
    }
    public function getPid(){
        return $this->apiParas['pid'];
    }
    private  $subUnionId;

    public function setSubUnionId($subUnionId){
        $this->apiParas['subUnionId'] = $subUnionId;
    }
    public function getSubUnionId(){
        return $this->apiParas['subUnionId'];
    }
    private  $shortUrl;

    public function setShortUrl($shortUrl){
        $this->apiParas['shortUrl'] = $shortUrl;
    }
    public function getShortUrl(){
        return $this->apiParas['shortUrl'];
    }
    private  $kplClick;

    public function setKplClick($kplClick){
        $this->apiParas['kplClick'] = $kplClick;
    }
    public function getKplClick(){
        return $this->apiParas['kplClick'];
    }
}

?>