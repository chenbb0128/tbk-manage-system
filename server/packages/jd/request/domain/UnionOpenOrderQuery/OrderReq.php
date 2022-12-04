<?php
namespace UnionOpenOrderQuery;
class OrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.order.base.OrderReq";
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
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $time;
    
    public function setTime($time){
        $this->params['time'] = $time;
    }

    public function getTime(){
        return $this->time;
    }
            
    private $childUnionId;
    
    public function setChildUnionId($childUnionId){
        $this->params['childUnionId'] = $childUnionId;
    }

    public function getChildUnionId(){
        return $this->childUnionId;
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