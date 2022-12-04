<?php
namespace UnionOpenCouponGiftGet;
class CouponReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.coupon.gift.CreateGiftCouponReq";
    }
        
    private $skuMaterialId;
    
    public function setSkuMaterialId($skuMaterialId){
        $this->params['skuMaterialId'] = $skuMaterialId;
    }

    public function getSkuMaterialId(){
        return $this->skuMaterialId;
    }
            
    private $discount;
    
    public function setDiscount($discount){
        $this->params['discount'] = $discount;
    }

    public function getDiscount(){
        return $this->discount;
    }
            
    private $amount;
    
    public function setAmount($amount){
        $this->params['amount'] = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }
            
    private $receiveStartTime;
    
    public function setReceiveStartTime($receiveStartTime){
        $this->params['receiveStartTime'] = $receiveStartTime;
    }

    public function getReceiveStartTime(){
        return $this->receiveStartTime;
    }
            
    private $receiveEndTime;
    
    public function setReceiveEndTime($receiveEndTime){
        $this->params['receiveEndTime'] = $receiveEndTime;
    }

    public function getReceiveEndTime(){
        return $this->receiveEndTime;
    }
            
    private $effectiveDays;
    
    public function setEffectiveDays($effectiveDays){
        $this->params['effectiveDays'] = $effectiveDays;
    }

    public function getEffectiveDays(){
        return $this->effectiveDays;
    }
            
    private $isSpu;
    
    public function setIsSpu($isSpu){
        $this->params['isSpu'] = $isSpu;
    }

    public function getIsSpu(){
        return $this->isSpu;
    }
            
    private $expireType;
    
    public function setExpireType($expireType){
        $this->params['expireType'] = $expireType;
    }

    public function getExpireType(){
        return $this->expireType;
    }
            
    private $useStartTime;
    
    public function setUseStartTime($useStartTime){
        $this->params['useStartTime'] = $useStartTime;
    }

    public function getUseStartTime(){
        return $this->useStartTime;
    }
            
    private $useEndTime;
    
    public function setUseEndTime($useEndTime){
        $this->params['useEndTime'] = $useEndTime;
    }

    public function getUseEndTime(){
        return $this->useEndTime;
    }
            
    private $share;
    
    public function setShare($share){
        $this->params['share'] = $share;
    }

    public function getShare(){
        return $this->share;
    }
            
    private $contentMatch;
    
    public function setContentMatch($contentMatch){
        $this->params['contentMatch'] = $contentMatch;
    }

    public function getContentMatch(){
        return $this->contentMatch;
    }
            
    private $couponTitle;
    
    public function setCouponTitle($couponTitle){
        $this->params['couponTitle'] = $couponTitle;
    }

    public function getCouponTitle(){
        return $this->couponTitle;
    }
            
    private $contentMatchMedias;
    
    public function setContentMatchMedias($contentMatchMedias){
        $this->params['contentMatchMedias'] = $contentMatchMedias;
    }

    public function getContentMatchMedias(){
        return $this->contentMatchMedias;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>