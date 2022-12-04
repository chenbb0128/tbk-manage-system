<?php
namespace AfterSaleAfsApplyCreate;
class AsDetailDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfterSaleDetailDto";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $skuNum;
    
    public function setSkuNum($skuNum){
        $this->params['skuNum'] = $skuNum;
    }

    public function getSkuNum(){
        return $this->skuNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>