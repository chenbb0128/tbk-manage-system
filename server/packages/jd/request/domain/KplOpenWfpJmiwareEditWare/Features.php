<?php
namespace KplOpenWfpJmiwareEditWare;
class Features{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $featureKey;
    
    public function setFeatureKey($featureKey){
        $this->params['featureKey'] = $featureKey;
    }

    public function getFeatureKey(){
        return $this->featureKey;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>