<?php
namespace KplOpenYaoMultipriceUpdate;
class PriceName{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.PriceName";
    }
        
    private $price;
    
    public function setPrice($price){
        $this->params['price'] = $price;
    }

    public function getPrice(){
        return $this->price;
    }
            
    private $priceNameEnum;
    
    public function setPriceNameEnum($priceNameEnum){
        $this->params['priceNameEnum'] = $priceNameEnum;
    }

    public function getPriceNameEnum(){
        return $this->priceNameEnum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>