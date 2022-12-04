<?php
namespace KeplerSettledAftermarketQueryservicepage;
class QueryServicePageParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.aftermarket.domain.QueryServicePageParam";
    }
        
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $afsApplyTimeBegin;
    
    public function setAfsApplyTimeBegin($afsApplyTimeBegin){
        $this->params['afsApplyTimeBegin'] = $afsApplyTimeBegin;
    }

    public function getAfsApplyTimeBegin(){
        return $this->afsApplyTimeBegin;
    }
            
    private $afsApplyTimeEnd;
    
    public function setAfsApplyTimeEnd($afsApplyTimeEnd){
        $this->params['afsApplyTimeEnd'] = $afsApplyTimeEnd;
    }

    public function getAfsApplyTimeEnd(){
        return $this->afsApplyTimeEnd;
    }
            
    private $approvedDateBegin;
    
    public function setApprovedDateBegin($approvedDateBegin){
        $this->params['approvedDateBegin'] = $approvedDateBegin;
    }

    public function getApprovedDateBegin(){
        return $this->approvedDateBegin;
    }
            
    private $approvedDateEnd;
    
    public function setApprovedDateEnd($approvedDateEnd){
        $this->params['approvedDateEnd'] = $approvedDateEnd;
    }

    public function getApprovedDateEnd(){
        return $this->approvedDateEnd;
    }
            
    private $trackPin;
    
    public function setTrackPin($trackPin){
        $this->params['trackPin'] = $trackPin;
    }

    public function getTrackPin(){
        return $this->trackPin;
    }
            
    private $customerPin;
    
    public function setCustomerPin($customerPin){
        $this->params['customerPin'] = $customerPin;
    }

    public function getCustomerPin(){
        return $this->customerPin;
    }
            
    private $customerName;
    
    public function setCustomerName($customerName){
        $this->params['customerName'] = $customerName;
    }

    public function getCustomerName(){
        return $this->customerName;
    }
            
    private $customerTel;
    
    public function setCustomerTel($customerTel){
        $this->params['customerTel'] = $customerTel;
    }

    public function getCustomerTel(){
        return $this->customerTel;
    }
            
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $newOrderId;
    
    public function setNewOrderId($newOrderId){
        $this->params['newOrderId'] = $newOrderId;
    }

    public function getNewOrderId(){
        return $this->newOrderId;
    }
            
    private $expressCode;
    
    public function setExpressCode($expressCode){
        $this->params['expressCode'] = $expressCode;
    }

    public function getExpressCode(){
        return $this->expressCode;
    }
            
    private $afsServiceStep;
    
    public function setAfsServiceStep($afsServiceStep){
        $this->params['afsServiceStep'] = $afsServiceStep;
    }

    public function getAfsServiceStep(){
        return $this->afsServiceStep;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $operatorInfoParam;
            
    public function setOperatorInfoParam($operatorInfoParam){
        $this->params['operatorInfoParam'] = $operatorInfoParam ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>