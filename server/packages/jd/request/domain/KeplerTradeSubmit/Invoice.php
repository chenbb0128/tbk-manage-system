<?php
namespace KeplerTradeSubmit;
class Invoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.InvoiceParam";
    }
        
    private $selectInvoiceType;
    
    public function setSelectInvoiceType($selectInvoiceType){
        $this->params['selectInvoiceType'] = $selectInvoiceType;
    }

    public function getSelectInvoiceType(){
        return $this->selectInvoiceType;
    }
            
    private $invoicePutType;
    
    public function setInvoicePutType($invoicePutType){
        $this->params['invoicePutType'] = $invoicePutType;
    }

    public function getInvoicePutType(){
        return $this->invoicePutType;
    }
            
    private $vatInvoice;
            
    public function setVatInvoice($vatInvoice){
        $this->params['vatInvoice'] = $vatInvoice ->getInstance();
    }
        
            
    private $normalInvoice;
            
    public function setNormalInvoice($normalInvoice){
        $this->params['normalInvoice'] = $normalInvoice ->getInstance();
    }
        
            
    private $electroInvoice;
            
    public function setElectroInvoice($electroInvoice){
        $this->params['electroInvoice'] = $electroInvoice ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>