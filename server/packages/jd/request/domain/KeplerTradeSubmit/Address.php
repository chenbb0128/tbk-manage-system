<?php
namespace KeplerTradeSubmit;
class Address{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.AddressParam";
    }
        
    private $addressId;
    
    public function setAddressId($addressId){
        $this->params['addressId'] = $addressId;
    }

    public function getAddressId(){
        return $this->addressId;
    }
            
    private $addressType;
    
    public function setAddressType($addressType){
        $this->params['addressType'] = $addressType;
    }

    public function getAddressType(){
        return $this->addressType;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
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
            
    private $provinceName;
    
    public function setProvinceName($provinceName){
        $this->params['provinceName'] = $provinceName;
    }

    public function getProvinceName(){
        return $this->provinceName;
    }
            
    private $cityName;
    
    public function setCityName($cityName){
        $this->params['cityName'] = $cityName;
    }

    public function getCityName(){
        return $this->cityName;
    }
            
    private $countyName;
    
    public function setCountyName($countyName){
        $this->params['countyName'] = $countyName;
    }

    public function getCountyName(){
        return $this->countyName;
    }
            
    private $townName;
    
    public function setTownName($townName){
        $this->params['townName'] = $townName;
    }

    public function getTownName(){
        return $this->townName;
    }
            
    private $addressDetail;
    
    public function setAddressDetail($addressDetail){
        $this->params['addressDetail'] = $addressDetail;
    }

    public function getAddressDetail(){
        return $this->addressDetail;
    }
            
    private $postCode;
    
    public function setPostCode($postCode){
        $this->params['postCode'] = $postCode;
    }

    public function getPostCode(){
        return $this->postCode;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
            
    private $phone;
    
    public function setPhone($phone){
        $this->params['phone'] = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }
            
    private $email;
    
    public function setEmail($email){
        $this->params['email'] = $email;
    }

    public function getEmail(){
        return $this->email;
    }
            
    private $orgId;
    
    public function setOrgId($orgId){
        $this->params['orgId'] = $orgId;
    }

    public function getOrgId(){
        return $this->orgId;
    }
            
    private $longitude;
    
    public function setLongitude($longitude){
        $this->params['longitude'] = $longitude;
    }

    public function getLongitude(){
        return $this->longitude;
    }
            
    private $latitude;
    
    public function setLatitude($latitude){
        $this->params['latitude'] = $latitude;
    }

    public function getLatitude(){
        return $this->latitude;
    }
            
    private $coord_type;
    
    public function setCoord_type($coord_type){
        $this->params['coord_type'] = $coord_type;
    }

    public function getCoord_type(){
        return $this->coord_type;
    }
            
    private $addressDefault;
    
    public function setAddressDefault($addressDefault){
        $this->params['addressDefault'] = $addressDefault;
    }

    public function getAddressDefault(){
        return $this->addressDefault;
    }
            
    private $addressName;
    
    public function setAddressName($addressName){
        $this->params['addressName'] = $addressName;
    }

    public function getAddressName(){
        return $this->addressName;
    }
            
    private $paymentId;
    
    public function setPaymentId($paymentId){
        $this->params['paymentId'] = $paymentId;
    }

    public function getPaymentId(){
        return $this->paymentId;
    }
            
    private $pickId;
    
    public function setPickId($pickId){
        $this->params['pickId'] = $pickId;
    }

    public function getPickId(){
        return $this->pickId;
    }
            
    private $pickName;
    
    public function setPickName($pickName){
        $this->params['pickName'] = $pickName;
    }

    public function getPickName(){
        return $this->pickName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>