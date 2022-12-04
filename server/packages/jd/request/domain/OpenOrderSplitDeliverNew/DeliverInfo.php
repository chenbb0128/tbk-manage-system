<?php
namespace OpenOrderSplitDeliverNew;
class DeliverInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gongxiao.kepler.domain.DeliverInfo";
    }
        
    private $deliveryId;
    
    public function setDeliveryId($deliveryId){
        $this->params['deliveryId'] = $deliveryId;
    }

    public function getDeliveryId(){
        return $this->deliveryId;
    }
            
    private $shipmentType;
    
    public function setShipmentType($shipmentType){
        $this->params['shipmentType'] = $shipmentType;
    }

    public function getShipmentType(){
        return $this->shipmentType;
    }
            
    private $logiCompany;
    
    public function setLogiCompany($logiCompany){
        $this->params['logiCompany'] = $logiCompany;
    }

    public function getLogiCompany(){
        return $this->logiCompany;
    }
            
    private $customerCode;
    
    public function setCustomerCode($customerCode){
        $this->params['customerCode'] = $customerCode;
    }

    public function getCustomerCode(){
        return $this->customerCode;
    }
            
    private $logiNo;
    
    public function setLogiNo($logiNo){
        $this->params['logiNo'] = $logiNo;
    }

    public function getLogiNo(){
        return $this->logiNo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>