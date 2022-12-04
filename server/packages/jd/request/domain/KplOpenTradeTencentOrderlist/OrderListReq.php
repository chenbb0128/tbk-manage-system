<?php
namespace KplOpenTradeTencentOrderlist;
class OrderListReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.master.order.domain.OrderListReq";
    }
        
    private $size;
    
    public function setSize($size){
        $this->params['size'] = $size;
    }

    public function getSize(){
        return $this->size;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $state;
    
    public function setState($state){
        $this->params['state'] = $state;
    }

    public function getState(){
        return $this->state;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>