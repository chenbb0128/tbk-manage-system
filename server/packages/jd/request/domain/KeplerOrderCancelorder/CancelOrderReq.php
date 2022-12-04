<?php
namespace KeplerOrderCancelorder;
class CancelOrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.order.domain.cancel.CancelOrderReq";
    }
        
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $applyDate;
    
    public function setApplyDate($applyDate){
        $this->params['applyDate'] = $applyDate;
    }

    public function getApplyDate(){
        return $this->applyDate;
    }
            
    private $applyPin;
    
    public function setApplyPin($applyPin){
        $this->params['applyPin'] = $applyPin;
    }

    public function getApplyPin(){
        return $this->applyPin;
    }
            
    private $applyName;
    
    public function setApplyName($applyName){
        $this->params['applyName'] = $applyName;
    }

    public function getApplyName(){
        return $this->applyName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>