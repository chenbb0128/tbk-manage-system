<?php
namespace KplOpenPromiseDosConfig;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.promise.dos.domain.delivery.ZxjDeliveryRequest";
    }
        
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $provinceId;
    
    public function setProvinceId($provinceId){
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId(){
        return $this->provinceId;
    }
            
    private $cityId;
    
    public function setCityId($cityId){
        $this->params['cityId'] = $cityId;
    }

    public function getCityId(){
        return $this->cityId;
    }
            
    private $countyId;
    
    public function setCountyId($countyId){
        $this->params['countyId'] = $countyId;
    }

    public function getCountyId(){
        return $this->countyId;
    }
            
    private $townId;
    
    public function setTownId($townId){
        $this->params['townId'] = $townId;
    }

    public function getTownId(){
        return $this->townId;
    }
            
    private $skuProperties;
                                        
    public function setSkuProperties($skuProperties){
        $size = count($skuProperties);
        for ($i=0; $i<$size; $i++){
            $skuProperties [$i] = $skuProperties [$i] ->getInstance();
        }
        $this->params['skuProperties'] = $skuProperties;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>