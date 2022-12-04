<?php
namespace KeplerSettledAftermarketSaveaftermarket;
class PickwareDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AfsApplyPickwareDto";
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
            
    private $doorPickReserveType;
    
    public function setDoorPickReserveType($doorPickReserveType){
        $this->params['doorPickReserveType'] = $doorPickReserveType;
    }

    public function getDoorPickReserveType(){
        return $this->doorPickReserveType;
    }
            
    private $pickwareAddress;
    
    public function setPickwareAddress($pickwareAddress){
        $this->params['pickwareAddress'] = $pickwareAddress;
    }

    public function getPickwareAddress(){
        return $this->pickwareAddress;
    }
            
    private $reserveDateStr;
    
    public function setReserveDateStr($reserveDateStr){
        $this->params['reserveDateStr'] = $reserveDateStr;
    }

    public function getReserveDateStr(){
        return $this->reserveDateStr;
    }
            
    private $reserveDateBegin;
    
    public function setReserveDateBegin($reserveDateBegin){
        $this->params['reserveDateBegin'] = $reserveDateBegin;
    }

    public function getReserveDateBegin(){
        return $this->reserveDateBegin;
    }
            
    private $reserveDateEnd;
    
    public function setReserveDateEnd($reserveDateEnd){
        $this->params['reserveDateEnd'] = $reserveDateEnd;
    }

    public function getReserveDateEnd(){
        return $this->reserveDateEnd;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>