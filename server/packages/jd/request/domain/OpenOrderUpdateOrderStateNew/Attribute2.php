<?php
namespace OpenOrderUpdateOrderStateNew;
class Attribute2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gongxiao.kepler.domain.OrderExtSkuBatchInfo";
    }
        
    private $manufactureTime;
    
    public function setManufactureTime($manufactureTime){
        $this->params['manufactureTime'] = $manufactureTime;
    }

    public function getManufactureTime(){
        return $this->manufactureTime;
    }
            
    private $validTime;
    
    public function setValidTime($validTime){
        $this->params['validTime'] = $validTime;
    }

    public function getValidTime(){
        return $this->validTime;
    }
            
    private $batchNum;
    
    public function setBatchNum($batchNum){
        $this->params['batchNum'] = $batchNum;
    }

    public function getBatchNum(){
        return $this->batchNum;
    }
            
    private $batchCount;
    
    public function setBatchCount($batchCount){
        $this->params['batchCount'] = $batchCount;
    }

    public function getBatchCount(){
        return $this->batchCount;
    }
            
    private $skuPrice;
    
    public function setSkuPrice($skuPrice){
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice(){
        return $this->skuPrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>