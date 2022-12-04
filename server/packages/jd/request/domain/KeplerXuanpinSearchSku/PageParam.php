<?php
namespace KeplerXuanpinSearchSku;
class PageParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.xuanpin.export.domain.PageParam";
    }
        
    private $pageNum;
    
    public function setPageNum($pageNum){
        $this->params['pageNum'] = $pageNum;
    }

    public function getPageNum(){
        return $this->pageNum;
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