<?php
namespace KeplerTradeSubmit;
class CombinationPayment{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.CombinationPaymentParam";
    }
        
    private $mainPaymentType;
    
    public function setMainPaymentType($mainPaymentType){
        $this->params['mainPaymentType'] = $mainPaymentType;
    }

    public function getMainPaymentType(){
        return $this->mainPaymentType;
    }
            
    private $subPaymentType;
    
    public function setSubPaymentType($subPaymentType){
        $this->params['subPaymentType'] = $subPaymentType;
    }

    public function getSubPaymentType(){
        return $this->subPaymentType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>