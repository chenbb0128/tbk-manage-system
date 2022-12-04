<?php
namespace KeplerSettledAftermarketSaveaftermarket;
class RefundDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfsApplyRefundDto";
    }
        
    private $bankCode;
    
    public function setBankCode($bankCode){
        $this->params['bankCode'] = $bankCode;
    }

    public function getBankCode(){
        return $this->bankCode;
    }
            
    private $bankName;
    
    public function setBankName($bankName){
        $this->params['bankName'] = $bankName;
    }

    public function getBankName(){
        return $this->bankName;
    }
            
    private $bankProvince;
    
    public function setBankProvince($bankProvince){
        $this->params['bankProvince'] = $bankProvince;
    }

    public function getBankProvince(){
        return $this->bankProvince;
    }
            
    private $bankCity;
    
    public function setBankCity($bankCity){
        $this->params['bankCity'] = $bankCity;
    }

    public function getBankCity(){
        return $this->bankCity;
    }
            
    private $branchBankAddress;
    
    public function setBranchBankAddress($branchBankAddress){
        $this->params['branchBankAddress'] = $branchBankAddress;
    }

    public function getBranchBankAddress(){
        return $this->branchBankAddress;
    }
            
    private $bankAccountHolder;
    
    public function setBankAccountHolder($bankAccountHolder){
        $this->params['bankAccountHolder'] = $bankAccountHolder;
    }

    public function getBankAccountHolder(){
        return $this->bankAccountHolder;
    }
            
    private $refundType;
    
    public function setRefundType($refundType){
        $this->params['refundType'] = $refundType;
    }

    public function getRefundType(){
        return $this->refundType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>