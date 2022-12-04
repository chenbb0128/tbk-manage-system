<?php
namespace KeplerSettledAftermarketSaveaftermarket;
class CustomerDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfsApplyCustomerDto";
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
            
    private $customerContactName;
    
    public function setCustomerContactName($customerContactName){
        $this->params['customerContactName'] = $customerContactName;
    }

    public function getCustomerContactName(){
        return $this->customerContactName;
    }
            
    private $customerTel;
    
    public function setCustomerTel($customerTel){
        $this->params['customerTel'] = $customerTel;
    }

    public function getCustomerTel(){
        return $this->customerTel;
    }
            
    private $customerMobilePhone;
    
    public function setCustomerMobilePhone($customerMobilePhone){
        $this->params['customerMobilePhone'] = $customerMobilePhone;
    }

    public function getCustomerMobilePhone(){
        return $this->customerMobilePhone;
    }
            
    private $customerEmail;
    
    public function setCustomerEmail($customerEmail){
        $this->params['customerEmail'] = $customerEmail;
    }

    public function getCustomerEmail(){
        return $this->customerEmail;
    }
            
    private $customerPostcode;
    
    public function setCustomerPostcode($customerPostcode){
        $this->params['customerPostcode'] = $customerPostcode;
    }

    public function getCustomerPostcode(){
        return $this->customerPostcode;
    }
            
    private $customerGrade;
    
    public function setCustomerGrade($customerGrade){
        $this->params['customerGrade'] = $customerGrade;
    }

    public function getCustomerGrade(){
        return $this->customerGrade;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>