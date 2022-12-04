<?php
namespace UnionOpenSellingGoodsQuery;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.selling.SellingGoodsReq";
    }
        
    private $skuIds;
    
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds(){
        return $this->skuIds;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>