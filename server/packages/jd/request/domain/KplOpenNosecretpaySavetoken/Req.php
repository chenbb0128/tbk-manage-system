<?php
namespace KplOpenNosecretpaySavetoken;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.alpha.config.wrap.NosecretPayTokenReq";
    }
        
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $deviceId;
    
    public function setDeviceId($deviceId){
        $this->params['deviceId'] = $deviceId;
    }

    public function getDeviceId(){
        return $this->deviceId;
    }
            
    private $token;
    
    public function setToken($token){
        $this->params['token'] = $token;
    }

    public function getToken(){
        return $this->token;
    }
            
    private $remarks;
    
    public function setRemarks($remarks){
        $this->params['remarks'] = $remarks;
    }

    public function getRemarks(){
        return $this->remarks;
    }
            
    private $clientIp;
    
    public function setClientIp($clientIp){
        $this->params['clientIp'] = $clientIp;
    }

    public function getClientIp(){
        return $this->clientIp;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>