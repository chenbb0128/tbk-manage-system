<?php
namespace KeplerTradeSubmit;
class InvoiceConsignee{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.InvoiceConsigneeParam";
    }
        
    private $consigneeName;
    
    public function setConsigneeName($consigneeName){
        $this->params['consigneeName'] = $consigneeName;
    }

    public function getConsigneeName(){
        return $this->consigneeName;
    }
            
    private $provinceId;
    
    public function setProvinceId($provinceId){
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId(){
        return $this->provinceId;
    }
            
    private $province;
    
    public function setProvince($province){
        $this->params['province'] = $province;
    }

    public function getProvince(){
        return $this->province;
    }
            
    private $cityId;
    
    public function setCityId($cityId){
        $this->params['cityId'] = $cityId;
    }

    public function getCityId(){
        return $this->cityId;
    }
            
    private $city;
    
    public function setCity($city){
        $this->params['city'] = $city;
    }

    public function getCity(){
        return $this->city;
    }
            
    private $countyId;
    
    public function setCountyId($countyId){
        $this->params['countyId'] = $countyId;
    }

    public function getCountyId(){
        return $this->countyId;
    }
            
    private $county;
    
    public function setCounty($county){
        $this->params['county'] = $county;
    }

    public function getCounty(){
        return $this->county;
    }
            
    private $townId;
    
    public function setTownId($townId){
        $this->params['townId'] = $townId;
    }

    public function getTownId(){
        return $this->townId;
    }
            
    private $town;
    
    public function setTown($town){
        $this->params['town'] = $town;
    }

    public function getTown(){
        return $this->town;
    }
            
    private $phone;
    
    public function setPhone($phone){
        $this->params['phone'] = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }
            
    private $address;
    
    public function setAddress($address){
        $this->params['address'] = $address;
    }

    public function getAddress(){
        return $this->address;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>