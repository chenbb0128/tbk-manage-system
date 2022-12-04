<?php
namespace AfterSaleSendSkuUpdate;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.SendSkuUpdateParamReqVo";
    }
        
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $deliverDate;
    
    public function setDeliverDate($deliverDate){
        $this->params['deliverDate'] = $deliverDate;
    }

    public function getDeliverDate(){
        return $this->deliverDate;
    }
            
    private $expressCode;
    
    public function setExpressCode($expressCode){
        $this->params['expressCode'] = $expressCode;
    }

    public function getExpressCode(){
        return $this->expressCode;
    }
            
    private $expressCompany;
    
    public function setExpressCompany($expressCompany){
        $this->params['expressCompany'] = $expressCompany;
    }

    public function getExpressCompany(){
        return $this->expressCompany;
    }
            
    private $freightMoney;
    
    public function setFreightMoney($freightMoney){
        $this->params['freightMoney'] = $freightMoney;
    }

    public function getFreightMoney(){
        return $this->freightMoney;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>