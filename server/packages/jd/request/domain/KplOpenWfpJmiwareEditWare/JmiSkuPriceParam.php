<?php
namespace KplOpenWfpJmiwareEditWare;
class JmiSkuPriceParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.JmiSkuPriceParam";
    }
        
    private $jSkuId;
    
    public function setJSkuId($jSkuId){
        $this->params['jSkuId'] = $jSkuId;
    }

    public function getJSkuId(){
        return $this->jSkuId;
    }
            
    private $dateDay;
    
    public function setDateDay($dateDay){
        $this->params['dateDay'] = $dateDay;
    }

    public function getDateDay(){
        return $this->dateDay;
    }
            
    private $stock;
    
    public function setStock($stock){
        $this->params['stock'] = $stock;
    }

    public function getStock(){
        return $this->stock;
    }
            
    private $price;
    
    public function setPrice($price){
        $this->params['price'] = $price;
    }

    public function getPrice(){
        return $this->price;
    }
            
    private $settingList;
                                        
    public function setSettingList($settingList){
        $size = count($settingList);
        for ($i=0; $i<$size; $i++){
            $settingList [$i] = $settingList [$i] ->getInstance();
        }
        $this->params['settingList'] = $settingList;
    }
                                    
            
    private $extPropertyList;
                                        
    public function setExtPropertyList($extPropertyList){
        $size = count($extPropertyList);
        for ($i=0; $i<$size; $i++){
            $extPropertyList [$i] = $extPropertyList [$i] ->getInstance();
        }
        $this->params['extPropertyList'] = $extPropertyList;
    }
                                    
            
    private $preStock;
    
    public function setPreStock($preStock){
        $this->params['preStock'] = $preStock;
    }

    public function getPreStock(){
        return $this->preStock;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>