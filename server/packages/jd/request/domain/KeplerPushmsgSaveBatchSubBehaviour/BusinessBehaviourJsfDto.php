<?php
namespace KeplerPushmsgSaveBatchSubBehaviour;
class BusinessBehaviourJsfDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.k.dto.BusinessBehaviourJsfDto";
    }
        
    private $templateId;
    
    public function setTemplateId($templateId){
        $this->params['templateId'] = $templateId;
    }

    public function getTemplateId(){
        return $this->templateId;
    }
            
    private $behaviour;
    
    public function setBehaviour($behaviour){
        $this->params['behaviour'] = $behaviour;
    }

    public function getBehaviour(){
        return $this->behaviour;
    }
            
    private $businessCode;
    
    public function setBusinessCode($businessCode){
        $this->params['businessCode'] = $businessCode;
    }

    public function getBusinessCode(){
        return $this->businessCode;
    }
            
    private $businessId;
    
    public function setBusinessId($businessId){
        $this->params['businessId'] = $businessId;
    }

    public function getBusinessId(){
        return $this->businessId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>