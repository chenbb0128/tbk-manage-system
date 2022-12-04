<?php
namespace UnionOpenActivityQuery;
class ActivityReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.activity.base.ActivityReq";
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
            
    private $poolId;
    
    public function setPoolId($poolId){
        $this->params['poolId'] = $poolId;
    }

    public function getPoolId(){
        return $this->poolId;
    }
            
    private $activeDate;
    
    public function setActiveDate($activeDate){
        $this->params['activeDate'] = $activeDate;
    }

    public function getActiveDate(){
        return $this->activeDate;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>