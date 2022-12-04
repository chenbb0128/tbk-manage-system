<?php
class OrderUniteSubmitRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "biz.order.unite.submit";
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
    private  $thirdOrder;

    public function setThirdOrder($thirdOrder){
        $this->apiParas['thirdOrder'] = $thirdOrder;
    }
    public function getThirdOrder(){
        return $this->apiParas['thirdOrder'];
    }
    private  $sku;

    public function setSku($sku){
        $this->apiParas['sku'] = $sku;
    }
    public function getSku(){
        return $this->apiParas['sku'];
    }
    private  $name;

    public function setName($name){
        $this->apiParas['name'] = $name;
    }
    public function getName(){
        return $this->apiParas['name'];
    }
    private  $province;

    public function setProvince($province){
        $this->apiParas['province'] = $province;
    }
    public function getProvince(){
        return $this->apiParas['province'];
    }
    private  $city;

    public function setCity($city){
        $this->apiParas['city'] = $city;
    }
    public function getCity(){
        return $this->apiParas['city'];
    }
    private  $county;

    public function setCounty($county){
        $this->apiParas['county'] = $county;
    }
    public function getCounty(){
        return $this->apiParas['county'];
    }
    private  $town;

    public function setTown($town){
        $this->apiParas['town'] = $town;
    }
    public function getTown(){
        return $this->apiParas['town'];
    }
    private  $address;

    public function setAddress($address){
        $this->apiParas['address'] = $address;
    }
    public function getAddress(){
        return $this->apiParas['address'];
    }
    private  $zip;

    public function setZip($zip){
        $this->apiParas['zip'] = $zip;
    }
    public function getZip(){
        return $this->apiParas['zip'];
    }
    private  $phone;

    public function setPhone($phone){
        $this->apiParas['phone'] = $phone;
    }
    public function getPhone(){
        return $this->apiParas['phone'];
    }
    private  $mobile;

    public function setMobile($mobile){
        $this->apiParas['mobile'] = $mobile;
    }
    public function getMobile(){
        return $this->apiParas['mobile'];
    }
    private  $email;

    public function setEmail($email){
        $this->apiParas['email'] = $email;
    }
    public function getEmail(){
        return $this->apiParas['email'];
    }
    private  $remark;

    public function setRemark($remark){
        $this->apiParas['remark'] = $remark;
    }
    public function getRemark(){
        return $this->apiParas['remark'];
    }
    private  $invoiceState;

    public function setInvoiceState($invoiceState){
        $this->apiParas['invoiceState'] = $invoiceState;
    }
    public function getInvoiceState(){
        return $this->apiParas['invoiceState'];
    }
    private  $invoiceType;

    public function setInvoiceType($invoiceType){
        $this->apiParas['invoiceType'] = $invoiceType;
    }
    public function getInvoiceType(){
        return $this->apiParas['invoiceType'];
    }
    private  $selectedInvoiceTitle;

    public function setSelectedInvoiceTitle($selectedInvoiceTitle){
        $this->apiParas['selectedInvoiceTitle'] = $selectedInvoiceTitle;
    }
    public function getSelectedInvoiceTitle(){
        return $this->apiParas['selectedInvoiceTitle'];
    }
    private  $companyName;

    public function setCompanyName($companyName){
        $this->apiParas['companyName'] = $companyName;
    }
    public function getCompanyName(){
        return $this->apiParas['companyName'];
    }
    private  $invoiceContent;

    public function setInvoiceContent($invoiceContent){
        $this->apiParas['invoiceContent'] = $invoiceContent;
    }
    public function getInvoiceContent(){
        return $this->apiParas['invoiceContent'];
    }
    private  $paymentType;

    public function setPaymentType($paymentType){
        $this->apiParas['paymentType'] = $paymentType;
    }
    public function getPaymentType(){
        return $this->apiParas['paymentType'];
    }
    private  $isUseBalance;

    public function setIsUseBalance($isUseBalance){
        $this->apiParas['isUseBalance'] = $isUseBalance;
    }
    public function getIsUseBalance(){
        return $this->apiParas['isUseBalance'];
    }
    private  $submitState;

    public function setSubmitState($submitState){
        $this->apiParas['submitState'] = $submitState;
    }
    public function getSubmitState(){
        return $this->apiParas['submitState'];
    }
    private  $invoiceName;

    public function setInvoiceName($invoiceName){
        $this->apiParas['invoiceName'] = $invoiceName;
    }
    public function getInvoiceName(){
        return $this->apiParas['invoiceName'];
    }
    private  $invoicePhone;

    public function setInvoicePhone($invoicePhone){
        $this->apiParas['invoicePhone'] = $invoicePhone;
    }
    public function getInvoicePhone(){
        return $this->apiParas['invoicePhone'];
    }
    private  $invoiceProvice;

    public function setInvoiceProvice($invoiceProvice){
        $this->apiParas['invoiceProvice'] = $invoiceProvice;
    }
    public function getInvoiceProvice(){
        return $this->apiParas['invoiceProvice'];
    }
    private  $invoiceCity;

    public function setInvoiceCity($invoiceCity){
        $this->apiParas['invoiceCity'] = $invoiceCity;
    }
    public function getInvoiceCity(){
        return $this->apiParas['invoiceCity'];
    }
    private  $invoiceCounty;

    public function setInvoiceCounty($invoiceCounty){
        $this->apiParas['invoiceCounty'] = $invoiceCounty;
    }
    public function getInvoiceCounty(){
        return $this->apiParas['invoiceCounty'];
    }
    private  $invoiceAddress;

    public function setInvoiceAddress($invoiceAddress){
        $this->apiParas['invoiceAddress'] = $invoiceAddress;
    }
    public function getInvoiceAddress(){
        return $this->apiParas['invoiceAddress'];
    }
    private  $doOrderPriceMode;

    public function setDoOrderPriceMode($doOrderPriceMode){
        $this->apiParas['doOrderPriceMode'] = $doOrderPriceMode;
    }
    public function getDoOrderPriceMode(){
        return $this->apiParas['doOrderPriceMode'];
    }
    private  $orderPriceSnap;

    public function setOrderPriceSnap($orderPriceSnap){
        $this->apiParas['orderPriceSnap'] = $orderPriceSnap;
    }
    public function getOrderPriceSnap(){
        return $this->apiParas['orderPriceSnap'];
    }
    private  $extContent;

    public function setExtContent($extContent){
        $this->apiParas['extContent'] = $extContent;
    }
    public function getExtContent(){
        return $this->apiParas['extContent'];
    }
}

?>