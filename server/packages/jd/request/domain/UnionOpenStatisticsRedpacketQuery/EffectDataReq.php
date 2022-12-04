<?php
namespace UnionOpenStatisticsRedpacketQuery;
class EffectDataReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.statistics.RedPacketEffectDataReq";
    }
        
    private $actId;
    
    public function setActId($actId){
        $this->params['actId'] = $actId;
    }

    public function getActId(){
        return $this->actId;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $startDate;
    
    public function setStartDate($startDate){
        $this->params['startDate'] = $startDate;
    }

    public function getStartDate(){
        return $this->startDate;
    }
            
    private $endDate;
    
    public function setEndDate($endDate){
        $this->params['endDate'] = $endDate;
    }

    public function getEndDate(){
        return $this->endDate;
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
            
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>