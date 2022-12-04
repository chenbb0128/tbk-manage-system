<?php
namespace UnionOpenPositionQuery;
class PositionReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.position.base.PositionReq";
    }
        
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
            
    private $unionType;
    
    public function setUnionType($unionType){
        $this->params['unionType'] = $unionType;
    }

    public function getUnionType(){
        return $this->unionType;
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