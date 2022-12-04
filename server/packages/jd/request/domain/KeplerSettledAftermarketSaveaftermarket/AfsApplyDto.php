<?php
namespace KeplerSettledAftermarketSaveaftermarket;
class AfsApplyDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.aftermarket.domain.AfsApplyDto";
    }
        
    private $platformSrc;
    
    public function setPlatformSrc($platformSrc){
        $this->params['platformSrc'] = $platformSrc;
    }

    public function getPlatformSrc(){
        return $this->platformSrc;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $customerExpect;
    
    public function setCustomerExpect($customerExpect){
        $this->params['customerExpect'] = $customerExpect;
    }

    public function getCustomerExpect(){
        return $this->customerExpect;
    }
            
    private $changeSku;
    
    public function setChangeSku($changeSku){
        $this->params['changeSku'] = $changeSku;
    }

    public function getChangeSku(){
        return $this->changeSku;
    }
            
    private $questionTypeCid1;
    
    public function setQuestionTypeCid1($questionTypeCid1){
        $this->params['questionTypeCid1'] = $questionTypeCid1;
    }

    public function getQuestionTypeCid1(){
        return $this->questionTypeCid1;
    }
            
    private $questionTypeCid2;
    
    public function setQuestionTypeCid2($questionTypeCid2){
        $this->params['questionTypeCid2'] = $questionTypeCid2;
    }

    public function getQuestionTypeCid2(){
        return $this->questionTypeCid2;
    }
            
    private $questionDesc;
    
    public function setQuestionDesc($questionDesc){
        $this->params['questionDesc'] = $questionDesc;
    }

    public function getQuestionDesc(){
        return $this->questionDesc;
    }
            
    private $isNeedDetectionReport;
    
    public function setIsNeedDetectionReport($isNeedDetectionReport){
        $this->params['isNeedDetectionReport'] = $isNeedDetectionReport;
    }

    public function getIsNeedDetectionReport(){
        return $this->isNeedDetectionReport;
    }
            
    private $questionPic;
    
    public function setQuestionPic($questionPic){
        $this->params['questionPic'] = $questionPic;
    }

    public function getQuestionPic(){
        return $this->questionPic;
    }
            
    private $isHasPackage;
    
    public function setIsHasPackage($isHasPackage){
        $this->params['isHasPackage'] = $isHasPackage;
    }

    public function getIsHasPackage(){
        return $this->isHasPackage;
    }
            
    private $packageDesc;
    
    public function setPackageDesc($packageDesc){
        $this->params['packageDesc'] = $packageDesc;
    }

    public function getPackageDesc(){
        return $this->packageDesc;
    }
            
    private $createName;
    
    public function setCreateName($createName){
        $this->params['createName'] = $createName;
    }

    public function getCreateName(){
        return $this->createName;
    }
            
    private $isHasInvoice;
    
    public function setIsHasInvoice($isHasInvoice){
        $this->params['isHasInvoice'] = $isHasInvoice;
    }

    public function getIsHasInvoice(){
        return $this->isHasInvoice;
    }
            
    private $invoiceCode;
    
    public function setInvoiceCode($invoiceCode){
        $this->params['invoiceCode'] = $invoiceCode;
    }

    public function getInvoiceCode(){
        return $this->invoiceCode;
    }
            
    private $invoiceTime;
    
    public function setInvoiceTime($invoiceTime){
        $this->params['invoiceTime'] = $invoiceTime;
    }

    public function getInvoiceTime(){
        return $this->invoiceTime;
    }
            
    private $customerDto;
            
    public function setCustomerDto($customerDto){
        $this->params['customerDto'] = $customerDto ->getInstance();
    }
        
            
    private $pickwareDto;
            
    public function setPickwareDto($pickwareDto){
        $this->params['pickwareDto'] = $pickwareDto ->getInstance();
    }
        
            
    private $returnwareDto;
            
    public function setReturnwareDto($returnwareDto){
        $this->params['returnwareDto'] = $returnwareDto ->getInstance();
    }
        
            
    private $refundDto;
            
    public function setRefundDto($refundDto){
        $this->params['refundDto'] = $refundDto ->getInstance();
    }
        
            
    private $afsApplyDetailDtos;
                                        
    public function setAfsApplyDetailDtos($afsApplyDetailDtos){
        $size = count($afsApplyDetailDtos);
        for ($i=0; $i<$size; $i++){
            $afsApplyDetailDtos [$i] = $afsApplyDetailDtos [$i] ->getInstance();
        }
        $this->params['afsApplyDetailDtos'] = $afsApplyDetailDtos;
    }
                                    
            
    private $applyIdYhd;
    
    public function setApplyIdYhd($applyIdYhd){
        $this->params['applyIdYhd'] = $applyIdYhd;
    }

    public function getApplyIdYhd(){
        return $this->applyIdYhd;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>