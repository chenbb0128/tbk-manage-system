<?php
namespace OpenOrderSplitDeliverNew;
class OrderExtInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gongxiao.kepler.domain.OrderExtInfo";
    }
        
    private $orderAmount;
    
    public function setOrderAmount($orderAmount){
        $this->params['orderAmount'] = $orderAmount;
    }

    public function getOrderAmount(){
        return $this->orderAmount;
    }
            
    private $sendTime;
    
    public function setSendTime($sendTime){
        $this->params['sendTime'] = $sendTime;
    }

    public function getSendTime(){
        return $this->sendTime;
    }
            
    private $skuList;
                                        
    public function setSkuList($skuList){
        $size = count($skuList);
        for ($i=0; $i<$size; $i++){
            $skuList [$i] = $skuList [$i] ->getInstance();
        }
        $this->params['skuList'] = $skuList;
    }
                                    
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>