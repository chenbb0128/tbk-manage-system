<?php
namespace KplOpenWfpVscMakeCertCallback;
class Cert{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.Cert";
    }
        
    private $certId;
    
    public function setCertId($certId){
        $this->params['certId'] = $certId;
    }

    public function getCertId(){
        return $this->certId;
    }
            
    private $cardNum;
    
    public function setCardNum($cardNum){
        $this->params['cardNum'] = $cardNum;
    }

    public function getCardNum(){
        return $this->cardNum;
    }
            
    private $pwd;
    
    public function setPwd($pwd){
        $this->params['pwd'] = $pwd;
    }

    public function getPwd(){
        return $this->pwd;
    }
            
    private $effectiveTime;
    
    public function setEffectiveTime($effectiveTime){
        $this->params['effectiveTime'] = $effectiveTime;
    }

    public function getEffectiveTime(){
        return $this->effectiveTime;
    }
            
    private $expiryTime;
    
    public function setExpiryTime($expiryTime){
        $this->params['expiryTime'] = $expiryTime;
    }

    public function getExpiryTime(){
        return $this->expiryTime;
    }
            
    private $leftTimes;
    
    public function setLeftTimes($leftTimes){
        $this->params['leftTimes'] = $leftTimes;
    }

    public function getLeftTimes(){
        return $this->leftTimes;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>