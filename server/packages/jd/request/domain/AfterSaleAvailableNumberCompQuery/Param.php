<?php
namespace AfterSaleAvailableNumberCompQuery;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AvailableNumComQueParamReqVo";
    }
        
    private $jdOrderId;
    
    public function setJdOrderId($jdOrderId){
        $this->params['jdOrderId'] = $jdOrderId;
    }

    public function getJdOrderId(){
        return $this->jdOrderId;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>