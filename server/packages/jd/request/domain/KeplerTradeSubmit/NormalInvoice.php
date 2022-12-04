<?php
namespace KeplerTradeSubmit;
class NormalInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.NormalInvoiceParam";
    }
        
    private $selectedInvoiceTitle;
    
    public function setSelectedInvoiceTitle($selectedInvoiceTitle){
        $this->params['selectedInvoiceTitle'] = $selectedInvoiceTitle;
    }

    public function getSelectedInvoiceTitle(){
        return $this->selectedInvoiceTitle;
    }
            
    private $companyName;
    
    public function setCompanyName($companyName){
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName(){
        return $this->companyName;
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