<?php
namespace KplOpenWfpVscVerifiedNotify;
class VerifyRecord{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.VerifyRecord";
    }
        
    private $certId;
    
    public function setCertId($certId){
        $this->params['certId'] = $certId;
    }

    public function getCertId(){
        return $this->certId;
    }
            
    private $verifyingTimes;
    
    public function setVerifyingTimes($verifyingTimes){
        $this->params['verifyingTimes'] = $verifyingTimes;
    }

    public function getVerifyingTimes(){
        return $this->verifyingTimes;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
            
    private $operator;
    
    public function setOperator($operator){
        $this->params['operator'] = $operator;
    }

    public function getOperator(){
        return $this->operator;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>