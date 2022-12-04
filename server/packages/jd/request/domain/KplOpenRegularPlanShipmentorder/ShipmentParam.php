<?php
namespace KplOpenRegularPlanShipmentorder;
class ShipmentParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.purchase.regular.api.domain.plan.ShipmentParam";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $planId;
    
    public function setPlanId($planId){
        $this->params['planId'] = $planId;
    }

    public function getPlanId(){
        return $this->planId;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $logiCoprId;
    
    public function setLogiCoprId($logiCoprId){
        $this->params['logiCoprId'] = $logiCoprId;
    }

    public function getLogiCoprId(){
        return $this->logiCoprId;
    }
            
    private $logiNo;
    
    public function setLogiNo($logiNo){
        $this->params['logiNo'] = $logiNo;
    }

    public function getLogiNo(){
        return $this->logiNo;
    }
            
    private $installId;
    
    public function setInstallId($installId){
        $this->params['installId'] = $installId;
    }

    public function getInstallId(){
        return $this->installId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>