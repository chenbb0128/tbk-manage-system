<?php
namespace UnionOpenPromotionByunionidGet;
class PromotionCodeReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.base.PromotionCodeReq";
    }
        
    private $materialId;
    
    public function setMaterialId($materialId){
        $this->params['materialId'] = $materialId;
    }

    public function getMaterialId(){
        return $this->materialId;
    }
            
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $positionId;
    
    public function setPositionId($positionId){
        $this->params['positionId'] = $positionId;
    }

    public function getPositionId(){
        return $this->positionId;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $couponUrl;
    
    public function setCouponUrl($couponUrl){
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl(){
        return $this->couponUrl;
    }
            
    private $subUnionId;
    
    public function setSubUnionId($subUnionId){
        $this->params['subUnionId'] = $subUnionId;
    }

    public function getSubUnionId(){
        return $this->subUnionId;
    }
            
    private $chainType;
    
    public function setChainType($chainType){
        $this->params['chainType'] = $chainType;
    }

    public function getChainType(){
        return $this->chainType;
    }
            
    private $giftCouponKey;
    
    public function setGiftCouponKey($giftCouponKey){
        $this->params['giftCouponKey'] = $giftCouponKey;
    }

    public function getGiftCouponKey(){
        return $this->giftCouponKey;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>