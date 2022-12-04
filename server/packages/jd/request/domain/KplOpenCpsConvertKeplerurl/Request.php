<?php
namespace KplOpenCpsConvertKeplerurl;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jop.console.jsf.domain.GenKeplerUrlRequest";
    }
        
    private $sourceEmt;
    
    public function setSourceEmt($sourceEmt){
        $this->params['sourceEmt'] = $sourceEmt;
    }

    public function getSourceEmt(){
        return $this->sourceEmt;
    }
            
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $webId;
    
    public function setWebId($webId){
        $this->params['webId'] = $webId;
    }

    public function getWebId(){
        return $this->webId;
    }
            
    private $skuList;
    
    public function setSkuList($skuList){
        $this->params['skuList'] = $skuList;
    }

    public function getSkuList(){
        return $this->skuList;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>