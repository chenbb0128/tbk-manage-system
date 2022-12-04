<?php
namespace UnionOpenStatisticsGiftcouponQuery;
class EffectDataReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.statistics.GiftCouponEffectDataReq";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $giftCouponKey;
    
    public function setGiftCouponKey($giftCouponKey){
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey(){
        return $this->giftCouponKey;
    }
            
    private $createTime;
    
    public function setCreateTime($createTime){
        $this->params['createTime'] = $createTime;
    }

    public function getCreateTime(){
        return $this->createTime;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $key;
    
    public function setKey($key){
        $this->params['key'] = $key;
    }

    public function getKey(){
        return $this->key;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>