<?php
class InvoiceSubmitRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.invoice.submit";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $supplierOrder;

    public function setSupplierOrder($supplierOrder){
        $this->apiParas['supplierOrder'] = $supplierOrder;
    }
    public function getSupplierOrder(){
        return $this->apiParas['supplierOrder'];
    }
    private  $markId;

    public function setMarkId($markId){
        $this->apiParas['markId'] = $markId;
    }
    public function getMarkId(){
        return $this->apiParas['markId'];
    }
    private  $settlementId;

    public function setSettlementId($settlementId){
        $this->apiParas['settlementId'] = $settlementId;
    }
    public function getSettlementId(){
        return $this->apiParas['settlementId'];
    }
    private  $settlementNum;

    public function setSettlementNum($settlementNum){
        $this->apiParas['settlementNum'] = $settlementNum;
    }
    public function getSettlementNum(){
        return $this->apiParas['settlementNum'];
    }
    private  $settlementNakedPrice;

    public function setSettlementNakedPrice($settlementNakedPrice){
        $this->apiParas['settlementNakedPrice'] = $settlementNakedPrice;
    }
    public function getSettlementNakedPrice(){
        return $this->apiParas['settlementNakedPrice'];
    }
    private  $settlementTaxPrice;

    public function setSettlementTaxPrice($settlementTaxPrice){
        $this->apiParas['settlementTaxPrice'] = $settlementTaxPrice;
    }
    public function getSettlementTaxPrice(){
        return $this->apiParas['settlementTaxPrice'];
    }
    private  $invoiceType;

    public function setInvoiceType($invoiceType){
        $this->apiParas['invoiceType'] = $invoiceType;
    }
    public function getInvoiceType(){
        return $this->apiParas['invoiceType'];
    }
    private  $invoiceOrg;

    public function setInvoiceOrg($invoiceOrg){
        $this->apiParas['invoiceOrg'] = $invoiceOrg;
    }
    public function getInvoiceOrg(){
        return $this->apiParas['invoiceOrg'];
    }
    private  $bizInvoiceContent;

    public function setBizInvoiceContent($bizInvoiceContent){
        $this->apiParas['bizInvoiceContent'] = $bizInvoiceContent;
    }
    public function getBizInvoiceContent(){
        return $this->apiParas['bizInvoiceContent'];
    }
    private  $invoiceDate;

    public function setInvoiceDate($invoiceDate){
        $this->apiParas['invoiceDate'] = $invoiceDate;
    }
    public function getInvoiceDate(){
        return $this->apiParas['invoiceDate'];
    }
    private  $title;

    public function setTitle($title){
        $this->apiParas['title'] = $title;
    }
    public function getTitle(){
        return $this->apiParas['title'];
    }
    private  $billToParty;

    public function setBillToParty($billToParty){
        $this->apiParas['billToParty'] = $billToParty;
    }
    public function getBillToParty(){
        return $this->apiParas['billToParty'];
    }
    private  $enterpriseTaxpayer;

    public function setEnterpriseTaxpayer($enterpriseTaxpayer){
        $this->apiParas['enterpriseTaxpayer'] = $enterpriseTaxpayer;
    }
    public function getEnterpriseTaxpayer(){
        return $this->apiParas['enterpriseTaxpayer'];
    }
    private  $billToer;

    public function setBillToer($billToer){
        $this->apiParas['billToer'] = $billToer;
    }
    public function getBillToer(){
        return $this->apiParas['billToer'];
    }
    private  $billToContact;

    public function setBillToContact($billToContact){
        $this->apiParas['billToContact'] = $billToContact;
    }
    public function getBillToContact(){
        return $this->apiParas['billToContact'];
    }
    private  $billToProvince;

    public function setBillToProvince($billToProvince){
        $this->apiParas['billToProvince'] = $billToProvince;
    }
    public function getBillToProvince(){
        return $this->apiParas['billToProvince'];
    }
    private  $billToCity;

    public function setBillToCity($billToCity){
        $this->apiParas['billToCity'] = $billToCity;
    }
    public function getBillToCity(){
        return $this->apiParas['billToCity'];
    }
    private  $billToCounty;

    public function setBillToCounty($billToCounty){
        $this->apiParas['billToCounty'] = $billToCounty;
    }
    public function getBillToCounty(){
        return $this->apiParas['billToCounty'];
    }
    private  $billToTown;

    public function setBillToTown($billToTown){
        $this->apiParas['billToTown'] = $billToTown;
    }
    public function getBillToTown(){
        return $this->apiParas['billToTown'];
    }
    private  $billToAddress;

    public function setBillToAddress($billToAddress){
        $this->apiParas['billToAddress'] = $billToAddress;
    }
    public function getBillToAddress(){
        return $this->apiParas['billToAddress'];
    }
    private  $repaymentDate;

    public function setRepaymentDate($repaymentDate){
        $this->apiParas['repaymentDate'] = $repaymentDate;
    }
    public function getRepaymentDate(){
        return $this->apiParas['repaymentDate'];
    }
    private  $invoiceNum;

    public function setInvoiceNum($invoiceNum){
        $this->apiParas['invoiceNum'] = $invoiceNum;
    }
    public function getInvoiceNum(){
        return $this->apiParas['invoiceNum'];
    }
    private  $invoiceNakedPrice;

    public function setInvoiceNakedPrice($invoiceNakedPrice){
        $this->apiParas['invoiceNakedPrice'] = $invoiceNakedPrice;
    }
    public function getInvoiceNakedPrice(){
        return $this->apiParas['invoiceNakedPrice'];
    }
    private  $invoiceTaxPrice;

    public function setInvoiceTaxPrice($invoiceTaxPrice){
        $this->apiParas['invoiceTaxPrice'] = $invoiceTaxPrice;
    }
    public function getInvoiceTaxPrice(){
        return $this->apiParas['invoiceTaxPrice'];
    }
    private  $currentBatch;

    public function setCurrentBatch($currentBatch){
        $this->apiParas['currentBatch'] = $currentBatch;
    }
    public function getCurrentBatch(){
        return $this->apiParas['currentBatch'];
    }
    private  $totalBatch;

    public function setTotalBatch($totalBatch){
        $this->apiParas['totalBatch'] = $totalBatch;
    }
    public function getTotalBatch(){
        return $this->apiParas['totalBatch'];
    }
    private  $totalBatchInvoiceNakedAmount;

    public function setTotalBatchInvoiceNakedAmount($totalBatchInvoiceNakedAmount){
        $this->apiParas['totalBatchInvoiceNakedAmount'] = $totalBatchInvoiceNakedAmount;
    }
    public function getTotalBatchInvoiceNakedAmount(){
        return $this->apiParas['totalBatchInvoiceNakedAmount'];
    }
    private  $totalBatchInvoiceTaxAmount;

    public function setTotalBatchInvoiceTaxAmount($totalBatchInvoiceTaxAmount){
        $this->apiParas['totalBatchInvoiceTaxAmount'] = $totalBatchInvoiceTaxAmount;
    }
    public function getTotalBatchInvoiceTaxAmount(){
        return $this->apiParas['totalBatchInvoiceTaxAmount'];
    }
    private  $totalBatchInvoiceAmount;

    public function setTotalBatchInvoiceAmount($totalBatchInvoiceAmount){
        $this->apiParas['totalBatchInvoiceAmount'] = $totalBatchInvoiceAmount;
    }
    public function getTotalBatchInvoiceAmount(){
        return $this->apiParas['totalBatchInvoiceAmount'];
    }
    private  $billingType;

    public function setBillingType($billingType){
        $this->apiParas['billingType'] = $billingType;
    }
    public function getBillingType(){
        return $this->apiParas['billingType'];
    }
    private  $invoicePrice;

    public function setInvoicePrice($invoicePrice){
        $this->apiParas['invoicePrice'] = $invoicePrice;
    }
    public function getInvoicePrice(){
        return $this->apiParas['invoicePrice'];
    }
    private  $isMerge;

    public function setIsMerge($isMerge){
        $this->apiParas['isMerge'] = $isMerge;
    }
    public function getIsMerge(){
        return $this->apiParas['isMerge'];
    }
    private  $poNo;

    public function setPoNo($poNo){
        $this->apiParas['poNo'] = $poNo;
    }
    public function getPoNo(){
        return $this->apiParas['poNo'];
    }
    private  $enterpriseRegAddress;

    public function setEnterpriseRegAddress($enterpriseRegAddress){
        $this->apiParas['enterpriseRegAddress'] = $enterpriseRegAddress;
    }
    public function getEnterpriseRegAddress(){
        return $this->apiParas['enterpriseRegAddress'];
    }
    private  $enterpriseRegPhone;

    public function setEnterpriseRegPhone($enterpriseRegPhone){
        $this->apiParas['enterpriseRegPhone'] = $enterpriseRegPhone;
    }
    public function getEnterpriseRegPhone(){
        return $this->apiParas['enterpriseRegPhone'];
    }
    private  $enterpriseBankName;

    public function setEnterpriseBankName($enterpriseBankName){
        $this->apiParas['enterpriseBankName'] = $enterpriseBankName;
    }
    public function getEnterpriseBankName(){
        return $this->apiParas['enterpriseBankName'];
    }
    private  $enterpriseBankAccount;

    public function setEnterpriseBankAccount($enterpriseBankAccount){
        $this->apiParas['enterpriseBankAccount'] = $enterpriseBankAccount;
    }
    public function getEnterpriseBankAccount(){
        return $this->apiParas['enterpriseBankAccount'];
    }
}

?>