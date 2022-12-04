<?php
namespace KplOpenPromiseDosConfig;
class SkuProperty{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.SkuProperty";
    }
        
    private $sku;
    
    public function setSku($sku){
        $this->params['sku'] = $sku;
    }

    public function getSku(){
        return $this->sku;
    }
            
    private $venderType;
    
    public function setVenderType($venderType){
        $this->params['venderType'] = $venderType;
    }

    public function getVenderType(){
        return $this->venderType;
    }
            
    private $storeProperty;
    
    public function setStoreProperty($storeProperty){
        $this->params['storeProperty'] = $storeProperty;
    }

    public function getStoreProperty(){
        return $this->storeProperty;
    }
            
    private $skuMark;
    
    public function setSkuMark($skuMark){
        $this->params['skuMark'] = $skuMark;
    }

    public function getSkuMark(){
        return $this->skuMark;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>