<?php
namespace UnionOpenPromotionParse;
class PromotionReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.promotion.base.PromotionReq";
    }
        
    private $promotionUrl;
    
    public function setPromotionUrl($promotionUrl){
        $this->params['promotionUrl'] = $promotionUrl;
    }

    public function getPromotionUrl(){
        return $this->promotionUrl;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>