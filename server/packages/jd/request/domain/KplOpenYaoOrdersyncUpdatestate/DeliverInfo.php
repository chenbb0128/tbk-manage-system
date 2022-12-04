<?php
namespace KplOpenYaoOrdersyncUpdatestate;
class DeliverInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gongxiao.kepler.domain.DeliverInfo";
    }
        
    private $shipmentType;
    
    public function setShipmentType($shipmentType){
        $this->params['shipmentType'] = $shipmentType;
    }

    public function getShipmentType(){
        return $this->shipmentType;
    }
            
    private $customerCode;
    
    public function setCustomerCode($customerCode){
        $this->params['customerCode'] = $customerCode;
    }

    public function getCustomerCode(){
        return $this->customerCode;
    }
            
    private $deliveryId;
    
    public function setDeliveryId($deliveryId){
        $this->params['deliveryId'] = $deliveryId;
    }

    public function getDeliveryId(){
        return $this->deliveryId;
    }
            
    private $logiNo;
    
    public function setLogiNo($logiNo){
        $this->params['logiNo'] = $logiNo;
    }

    public function getLogiNo(){
        return $this->logiNo;
    }
            
    private $logiCompany;
    
    public function setLogiCompany($logiCompany){
        $this->params['logiCompany'] = $logiCompany;
    }

    public function getLogiCompany(){
        return $this->logiCompany;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>