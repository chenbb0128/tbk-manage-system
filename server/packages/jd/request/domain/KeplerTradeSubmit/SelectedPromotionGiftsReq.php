<?php
namespace KeplerTradeSubmit;
class SelectedPromotionGiftsReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.SelectedPromotionGiftsReq";
    }
        
    private $promotionId;
    
    public function setPromotionId($promotionId){
        $this->params['promotionId'] = $promotionId;
    }

    public function getPromotionId(){
        return $this->promotionId;
    }
            
    private $promotionType;
    
    public function setPromotionType($promotionType){
        $this->params['promotionType'] = $promotionType;
    }

    public function getPromotionType(){
        return $this->promotionType;
    }
            
    private $giftSkuReqList;
                                        
    public function setGiftSkuReqList($giftSkuReqList){
        $size = count($giftSkuReqList);
        for ($i=0; $i<$size; $i++){
            $giftSkuReqList [$i] = $giftSkuReqList [$i] ->getInstance();
        }
        $this->params['giftSkuReqList'] = $giftSkuReqList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>