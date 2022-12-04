<?php
namespace KplOpenSkuQueryinfo;
class SkuQuery{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gongxiao.kepler.domain.SkuQueryReq";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $skuAlias;
    
    public function setSkuAlias($skuAlias){
        $this->params['skuAlias'] = $skuAlias;
    }

    public function getSkuAlias(){
        return $this->skuAlias;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $currentPage;
    
    public function setCurrentPage($currentPage){
        $this->params['currentPage'] = $currentPage;
    }

    public function getCurrentPage(){
        return $this->currentPage;
    }
            
    private $wareState;
    
    public function setWareState($wareState){
        $this->params['wareState'] = $wareState;
    }

    public function getWareState(){
        return $this->wareState;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>