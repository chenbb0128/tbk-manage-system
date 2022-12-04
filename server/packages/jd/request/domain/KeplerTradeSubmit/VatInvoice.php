<?php
namespace KeplerTradeSubmit;
class VatInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.VATInvoiceParam";
    }
        
    private $companyName;
    
    public function setCompanyName($companyName){
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName(){
        return $this->companyName;
    }
            
    private $code;
    
    public function setCode($code){
        $this->params['code'] = $code;
    }

    public function getCode(){
        return $this->code;
    }
            
    private $regAddr;
    
    public function setRegAddr($regAddr){
        $this->params['regAddr'] = $regAddr;
    }

    public function getRegAddr(){
        return $this->regAddr;
    }
            
    private $regPhone;
    
    public function setRegPhone($regPhone){
        $this->params['regPhone'] = $regPhone;
    }

    public function getRegPhone(){
        return $this->regPhone;
    }
            
    private $regBank;
    
    public function setRegBank($regBank){
        $this->params['regBank'] = $regBank;
    }

    public function getRegBank(){
        return $this->regBank;
    }
            
    private $regBankAccount;
    
    public function setRegBankAccount($regBankAccount){
        $this->params['regBankAccount'] = $regBankAccount;
    }

    public function getRegBankAccount(){
        return $this->regBankAccount;
    }
            
    private $normalInvoiceContent;
    
    public function setNormalInvoiceContent($normalInvoiceContent){
        $this->params['normalInvoiceContent'] = $normalInvoiceContent;
    }

    public function getNormalInvoiceContent(){
        return $this->normalInvoiceContent;
    }
            
    private $bookInvoiceContent;
    
    public function setBookInvoiceContent($bookInvoiceContent){
        $this->params['bookInvoiceContent'] = $bookInvoiceContent;
    }

    public function getBookInvoiceContent(){
        return $this->bookInvoiceContent;
    }
            
    private $invoiceConsignee;
            
    public function setInvoiceConsignee($invoiceConsignee){
        $this->params['invoiceConsignee'] = $invoiceConsignee ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>