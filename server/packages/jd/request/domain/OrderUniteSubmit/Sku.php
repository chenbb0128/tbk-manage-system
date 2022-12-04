<?php
namespace OrderUniteSubmit;
class Sku{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.SkuInfo";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $bNeedAnnex;
    
    public function setBNeedAnnex($bNeedAnnex){
        $this->params['bNeedAnnex'] = $bNeedAnnex;
    }

    public function getBNeedAnnex(){
        return $this->bNeedAnnex;
    }
            
    private $bNeedGift;
    
    public function setBNeedGift($bNeedGift){
        $this->params['bNeedGift'] = $bNeedGift;
    }

    public function getBNeedGift(){
        return $this->bNeedGift;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>