<?php
namespace KeplerSettledAftermarketGetbackmode;
class BackAddr{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.aftermarket.domain.BackAddressParam";
    }
        
    private $expect;
    
    public function setExpect($expect){
        $this->params['expect'] = $expect;
    }

    public function getExpect(){
        return $this->expect;
    }
            
    private $province;
    
    public function setProvince($province){
        $this->params['province'] = $province;
    }

    public function getProvince(){
        return $this->province;
    }
            
    private $city;
    
    public function setCity($city){
        $this->params['city'] = $city;
    }

    public function getCity(){
        return $this->city;
    }
            
    private $county;
    
    public function setCounty($county){
        $this->params['county'] = $county;
    }

    public function getCounty(){
        return $this->county;
    }
            
    private $village;
    
    public function setVillage($village){
        $this->params['village'] = $village;
    }

    public function getVillage(){
        return $this->village;
    }
            
    private $detailAddress;
    
    public function setDetailAddress($detailAddress){
        $this->params['detailAddress'] = $detailAddress;
    }

    public function getDetailAddress(){
        return $this->detailAddress;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>