<?php
namespace KplOpenWfpJmiwareUpdateWareStatus;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.JmiWareStatusWrapper";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $opType;
    
    public function setOpType($opType){
        $this->params['opType'] = $opType;
    }

    public function getOpType(){
        return $this->opType;
    }
            
    private $opeReason;
    
    public function setOpeReason($opeReason){
        $this->params['opeReason'] = $opeReason;
    }

    public function getOpeReason(){
        return $this->opeReason;
    }
            
    private $opName;
    
    public function setOpName($opName){
        $this->params['opName'] = $opName;
    }

    public function getOpName(){
        return $this->opName;
    }
            
    private $opIp;
    
    public function setOpIp($opIp){
        $this->params['opIp'] = $opIp;
    }

    public function getOpIp(){
        return $this->opIp;
    }
            
    private $sourceId;
    
    public function setSourceId($sourceId){
        $this->params['sourceId'] = $sourceId;
    }

    public function getSourceId(){
        return $this->sourceId;
    }
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
            
    private $port;
    
    public function setPort($port){
        $this->params['port'] = $port;
    }

    public function getPort(){
        return $this->port;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>