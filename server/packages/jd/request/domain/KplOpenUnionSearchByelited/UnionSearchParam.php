<?php
namespace KplOpenUnionSearchByelited;
class UnionSearchParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.marketing.common.client.domain.union.UnionSearchParam";
    }
        
    private $eliteId;
    
    public function setEliteId($eliteId){
        $this->params['eliteId'] = $eliteId;
    }

    public function getEliteId(){
        return $this->eliteId;
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
            
    private $sortName;
    
    public function setSortName($sortName){
        $this->params['sortName'] = $sortName;
    }

    public function getSortName(){
        return $this->sortName;
    }
            
    private $sortType;
    
    public function setSortType($sortType){
        $this->params['sortType'] = $sortType;
    }

    public function getSortType(){
        return $this->sortType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>