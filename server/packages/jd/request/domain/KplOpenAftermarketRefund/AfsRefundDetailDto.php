<?php
namespace KplOpenAftermarketRefund;
class AfsRefundDetailDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.aftermarket.domain.AfsRefundDetailDto";
    }
        
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $datatype;
    
    public function setDatatype($datatype){
        $this->params['datatype'] = $datatype;
    }

    public function getDatatype(){
        return $this->datatype;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $pagesize;
    
    public function setPagesize($pagesize){
        $this->params['pagesize'] = $pagesize;
    }

    public function getPagesize(){
        return $this->pagesize;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>