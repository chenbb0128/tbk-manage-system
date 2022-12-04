<?php
namespace KeplerTradeSubmit;
class CartReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.trade.domain.cart.CartReq";
    }
        
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
            
    private $areaId;
    
    public function setAreaId($areaId){
        $this->params['areaId'] = $areaId;
    }

    public function getAreaId(){
        return $this->areaId;
    }
            
    private $user;
            
    public function setUser($user){
        $this->params['user'] = $user ->getInstance();
    }
        
            
    private $skuList;
                                        
    public function setSkuList($skuList){
        $size = count($skuList);
        for ($i=0; $i<$size; $i++){
            $skuList [$i] = $skuList [$i] ->getInstance();
        }
        $this->params['skuList'] = $skuList;
    }
                                    
            
    private $suitList;
                                        
    public function setSuitList($suitList){
        $size = count($suitList);
        for ($i=0; $i<$size; $i++){
            $suitList [$i] = $suitList [$i] ->getInstance();
        }
        $this->params['suitList'] = $suitList;
    }
                                    
            
    private $giftList;
                                        
    public function setGiftList($giftList){
        $size = count($giftList);
        for ($i=0; $i<$size; $i++){
            $giftList [$i] = $giftList [$i] ->getInstance();
        }
        $this->params['giftList'] = $giftList;
    }
                                    
            
    private $selectedPromotionGiftsReqList;
                                        
    public function setSelectedPromotionGiftsReqList($selectedPromotionGiftsReqList){
        $size = count($selectedPromotionGiftsReqList);
        for ($i=0; $i<$size; $i++){
            $selectedPromotionGiftsReqList [$i] = $selectedPromotionGiftsReqList [$i] ->getInstance();
        }
        $this->params['selectedPromotionGiftsReqList'] = $selectedPromotionGiftsReqList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>