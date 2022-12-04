<?php
namespace UnionOpenCouponGiftStop;
class CouponReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.coupon.gift.StopGiftCouponReq";
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