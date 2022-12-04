<?php
namespace UnionOpenOrderBonusQuery;
class OrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.order.bonus.BonusOrderReq";
    }
        
    private $optType;
    
    public function setOptType($optType){
        $this->params['optType'] = $optType;
    }

    public function getOptType(){
        return $this->optType;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
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
            
    private $sortValue;
    
    public function setSortValue($sortValue){
        $this->params['sortValue'] = $sortValue;
    }

    public function getSortValue(){
        return $this->sortValue;
    }
            
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>