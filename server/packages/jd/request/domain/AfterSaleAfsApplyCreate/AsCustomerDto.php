<?php
namespace AfterSaleAfsApplyCreate;
class AsCustomerDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfterSaleCustomerDto";
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
    
    function getInstance(){
        return $this->params;
    }

}

?>