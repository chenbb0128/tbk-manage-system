<?php
namespace KplOpenOrderInfoQueryorder;
class Var1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.ads.union.allocate.api.external.service.platform.OpenReqVo";
    }
        
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $childUnionId;
    
    public function setChildUnionId($childUnionId){
        $this->params['childUnionId'] = $childUnionId;
    }

    public function getChildUnionId(){
        return $this->childUnionId;
    }
            
    private $optType;
    
    public function setOptType($optType){
        $this->params['optType'] = $optType;
    }

    public function getOptType(){
        return $this->optType;
    }
            
    private $time;
    
    public function setTime($time){
        $this->params['time'] = $time;
    }

    public function getTime(){
        return $this->time;
    }
            
    private $pageNo;
    
    public function setPageNo($pageNo){
        $this->params['pageNo'] = $pageNo;
    }

    public function getPageNo(){
        return $this->pageNo;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>