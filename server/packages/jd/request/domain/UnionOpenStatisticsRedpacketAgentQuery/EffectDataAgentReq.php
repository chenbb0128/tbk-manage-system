<?php
namespace UnionOpenStatisticsRedpacketAgentQuery;
class EffectDataAgentReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.statistics.agent.RedPacketEffectDataAgentReq";
    }
        
    private $actId;
    
    public function setActId($actId){
        $this->params['actId'] = $actId;
    }

    public function getActId(){
        return $this->actId;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>