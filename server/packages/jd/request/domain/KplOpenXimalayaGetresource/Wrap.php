<?php
namespace KplOpenXimalayaGetresource;
class Wrap{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.smart.zny.broker.open.wrap.XiMaLaYaRequestWrap";
    }
        
    private $requestURI;
    
    public function setRequestURI($requestURI){
        $this->params['requestURI'] = $requestURI;
    }

    public function getRequestURI(){
        return $this->requestURI;
    }
            
    private $requestMethod;
    
    public function setRequestMethod($requestMethod){
        $this->params['requestMethod'] = $requestMethod;
    }

    public function getRequestMethod(){
        return $this->requestMethod;
    }
            
    private $requestQueryString;
    
    public function setRequestQueryString($requestQueryString){
        $this->params['requestQueryString'] = $requestQueryString;
    }

    public function getRequestQueryString(){
        return $this->requestQueryString;
    }
            
    private $requestParameterMap;
    
    public function setRequestParameterMap($requestParameterMap){
        $this->params['requestParameterMap'] = $requestParameterMap;
    }

    public function getRequestParameterMap(){
        return $this->requestParameterMap;
    }
            
    private $timestamp;
    
    public function setTimestamp($timestamp){
        $this->params['timestamp'] = $timestamp;
    }

    public function getTimestamp(){
        return $this->timestamp;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>