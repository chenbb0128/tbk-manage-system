<?php
namespace UnionOpenActivityBonusQuery;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.activity.bonus.BonusActivityReq";
    }
        
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
    }
            
    private $beginTime;
    
    public function setBeginTime($beginTime){
        $this->params['beginTime'] = $beginTime;
    }

    public function getBeginTime(){
        return $this->beginTime;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
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