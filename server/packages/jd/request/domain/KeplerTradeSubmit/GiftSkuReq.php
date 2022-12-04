<?php
namespace KeplerTradeSubmit;
class GiftSkuReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.GiftSkuReq";
    }
        
    private $sku;
    
    public function setSku($sku){
        $this->params['sku'] = $sku;
    }

    public function getSku(){
        return $this->sku;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>