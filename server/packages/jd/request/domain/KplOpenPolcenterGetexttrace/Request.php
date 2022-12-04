<?php
namespace KplOpenPolcenterGetexttrace;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.polcenter.manager.entity.CommonRequest";
    }
        
    private $orderNum;
    
    public function setOrderNum($orderNum){
        $this->params['orderNum'] = $orderNum;
    }

    public function getOrderNum(){
        return $this->orderNum;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
            
    private $factoryId;
    
    public function setFactoryId($factoryId){
        $this->params['factoryId'] = $factoryId;
    }

    public function getFactoryId(){
        return $this->factoryId;
    }
            
    private $androidId;
    
    public function setAndroidId($androidId){
        $this->params['androidId'] = $androidId;
    }

    public function getAndroidId(){
        return $this->androidId;
    }
            
    private $imei;
    
    public function setImei($imei){
        $this->params['imei'] = $imei;
    }

    public function getImei(){
        return $this->imei;
    }
            
    private $wifiMac;
    
    public function setWifiMac($wifiMac){
        $this->params['wifiMac'] = $wifiMac;
    }

    public function getWifiMac(){
        return $this->wifiMac;
    }
            
    private $clientIp;
    
    public function setClientIp($clientIp){
        $this->params['clientIp'] = $clientIp;
    }

    public function getClientIp(){
        return $this->clientIp;
    }
            
    private $bussName;
    
    public function setBussName($bussName){
        $this->params['bussName'] = $bussName;
    }

    public function getBussName(){
        return $this->bussName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>