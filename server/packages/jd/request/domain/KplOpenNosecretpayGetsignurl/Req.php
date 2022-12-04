<?php
namespace KplOpenNosecretpayGetsignurl;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.alpha.config.wrap.NosecretPaySignUrlReq";
    }
        
    private $deviceId;
    
    public function setDeviceId($deviceId){
        $this->params['deviceId'] = $deviceId;
    }

    public function getDeviceId(){
        return $this->deviceId;
    }
            
    private $returnUrl;
    
    public function setReturnUrl($returnUrl){
        $this->params['returnUrl'] = $returnUrl;
    }

    public function getReturnUrl(){
        return $this->returnUrl;
    }
            
    private $macAddress;
    
    public function setMacAddress($macAddress){
        $this->params['macAddress'] = $macAddress;
    }

    public function getMacAddress(){
        return $this->macAddress;
    }
            
    private $imei;
    
    public function setImei($imei){
        $this->params['imei'] = $imei;
    }

    public function getImei(){
        return $this->imei;
    }
            
    private $appType;
    
    public function setAppType($appType){
        $this->params['appType'] = $appType;
    }

    public function getAppType(){
        return $this->appType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>