<?php
namespace KplOpenBatchConvertCpslink;
class KeplerUrlparam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jop.console.jsf.domain.KeplerUrlparam";
    }
        
    private $urls;
    
    public function setUrls($urls){
        $this->params['urls'] = $urls;
    }

    public function getUrls(){
        return $this->urls;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $jdShortUrl;
    
    public function setJdShortUrl($jdShortUrl){
        $this->params['jdShortUrl'] = $jdShortUrl;
    }

    public function getJdShortUrl(){
        return $this->jdShortUrl;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>