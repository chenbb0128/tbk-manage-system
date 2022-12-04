<?php
namespace KeplerYaoWareStockUpdate;
class WareListVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.WareListVo";
    }
        
    private $venderSku;
    
    public function setVenderSku($venderSku){
        $this->params['venderSku'] = $venderSku;
    }

    public function getVenderSku(){
        return $this->venderSku;
    }
            
    private $skuStock;
    
    public function setSkuStock($skuStock){
        $this->params['skuStock'] = $skuStock;
    }

    public function getSkuStock(){
        return $this->skuStock;
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