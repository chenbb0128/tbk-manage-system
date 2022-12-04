<?php
namespace UnionOpenOrderAgentQuery;
class OrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.order.agent.OrderAgentReq";
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
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
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
            
    private $fields;
    
    public function setFields($fields){
        $this->params['fields'] = $fields;
    }

    public function getFields(){
        return $this->fields;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>