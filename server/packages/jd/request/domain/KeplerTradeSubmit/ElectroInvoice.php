<?php
namespace KeplerTradeSubmit;
class ElectroInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.ElectroInvoiceParam";
    }
        
    private $selectInvoiceTitle;
    
    public function setSelectInvoiceTitle($selectInvoiceTitle){
        $this->params['selectInvoiceTitle'] = $selectInvoiceTitle;
    }

    public function getSelectInvoiceTitle(){
        return $this->selectInvoiceTitle;
    }
            
    private $selectBookInvoiceContent;
    
    public function setSelectBookInvoiceContent($selectBookInvoiceContent){
        $this->params['selectBookInvoiceContent'] = $selectBookInvoiceContent;
    }

    public function getSelectBookInvoiceContent(){
        return $this->selectBookInvoiceContent;
    }
            
    private $selectNormalInvoiceContent;
    
    public function setSelectNormalInvoiceContent($selectNormalInvoiceContent){
        $this->params['selectNormalInvoiceContent'] = $selectNormalInvoiceContent;
    }

    public function getSelectNormalInvoiceContent(){
        return $this->selectNormalInvoiceContent;
    }
            
    private $invoiceConsigneeEmail;
    
    public function setInvoiceConsigneeEmail($invoiceConsigneeEmail){
        $this->params['invoiceConsigneeEmail'] = $invoiceConsigneeEmail;
    }

    public function getInvoiceConsigneeEmail(){
        return $this->invoiceConsigneeEmail;
    }
            
    private $invoiceConsigneePhone;
    
    public function setInvoiceConsigneePhone($invoiceConsigneePhone){
        $this->params['invoiceConsigneePhone'] = $invoiceConsigneePhone;
    }

    public function getInvoiceConsigneePhone(){
        return $this->invoiceConsigneePhone;
    }
            
    private $compayName;
    
    public function setCompayName($compayName){
        $this->params['compayName'] = $compayName;
    }

    public function getCompayName(){
        return $this->compayName;
    }
            
    private $code;
    
    public function setCode($code){
        $this->params['code'] = $code;
    }

    public function getCode(){
        return $this->code;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>