<?php
namespace AfterSaleAfsApplyCreate;
class AsPickwareDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfterSalePickwareDto";
    }
        
    private $pickwareType;
    
    public function setPickwareType($pickwareType){
        $this->params['pickwareType'] = $pickwareType;
    }

    public function getPickwareType(){
        return $this->pickwareType;
    }
            
    private $pickwareProvince;
    
    public function setPickwareProvince($pickwareProvince){
        $this->params['pickwareProvince'] = $pickwareProvince;
    }

    public function getPickwareProvince(){
        return $this->pickwareProvince;
    }
            
    private $pickwareCity;
    
    public function setPickwareCity($pickwareCity){
        $this->params['pickwareCity'] = $pickwareCity;
    }

    public function getPickwareCity(){
        return $this->pickwareCity;
    }
            
    private $pickwareCounty;
    
    public function setPickwareCounty($pickwareCounty){
        $this->params['pickwareCounty'] = $pickwareCounty;
    }

    public function getPickwareCounty(){
        return $this->pickwareCounty;
    }
            
    private $pickwareVillage;
    
    public function setPickwareVillage($pickwareVillage){
        $this->params['pickwareVillage'] = $pickwareVillage;
    }

    public function getPickwareVillage(){
        return $this->pickwareVillage;
    }
            
    private $pickwareAddress;
    
    public function setPickwareAddress($pickwareAddress){
        $this->params['pickwareAddress'] = $pickwareAddress;
    }

    public function getPickwareAddress(){
        return $this->pickwareAddress;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>