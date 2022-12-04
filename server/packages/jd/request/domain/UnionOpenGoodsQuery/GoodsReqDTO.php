<?php
namespace UnionOpenGoodsQuery;
class GoodsReqDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.base.GoodsReq";
    }
        
    private $cid1;
    
    public function setCid1($cid1){
        $this->params['cid1'] = $cid1;
    }

    public function getCid1(){
        return $this->cid1;
    }
            
    private $cid2;
    
    public function setCid2($cid2){
        $this->params['cid2'] = $cid2;
    }

    public function getCid2(){
        return $this->cid2;
    }
            
    private $cid3;
    
    public function setCid3($cid3){
        $this->params['cid3'] = $cid3;
    }

    public function getCid3(){
        return $this->cid3;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $skuIds;
    
    public function setSkuIds($skuIds){
        $this->params['skuIds'] = $skuIds;
    }

    public function getSkuIds(){
        return $this->skuIds;
    }
            
    private $keyword;
    
    public function setKeyword($keyword){
        $this->params['keyword'] = $keyword;
    }

    public function getKeyword(){
        return $this->keyword;
    }
            
    private $pricefrom;
    
    public function setPricefrom($pricefrom){
        $this->params['pricefrom'] = $pricefrom;
    }

    public function getPricefrom(){
        return $this->pricefrom;
    }
            
    private $priceto;
    
    public function setPriceto($priceto){
        $this->params['priceto'] = $priceto;
    }

    public function getPriceto(){
        return $this->priceto;
    }
            
    private $commissionShareStart;
    
    public function setCommissionShareStart($commissionShareStart){
        $this->params['commissionShareStart'] = $commissionShareStart;
    }

    public function getCommissionShareStart(){
        return $this->commissionShareStart;
    }
            
    private $commissionShareEnd;
    
    public function setCommissionShareEnd($commissionShareEnd){
        $this->params['commissionShareEnd'] = $commissionShareEnd;
    }

    public function getCommissionShareEnd(){
        return $this->commissionShareEnd;
    }
            
    private $owner;
    
    public function setOwner($owner){
        $this->params['owner'] = $owner;
    }

    public function getOwner(){
        return $this->owner;
    }
            
    private $sortName;
    
    public function setSortName($sortName){
        $this->params['sortName'] = $sortName;
    }

    public function getSortName(){
        return $this->sortName;
    }
            
    private $sort;
    
    public function setSort($sort){
        $this->params['sort'] = $sort;
    }

    public function getSort(){
        return $this->sort;
    }
            
    private $isCoupon;
    
    public function setIsCoupon($isCoupon){
        $this->params['isCoupon'] = $isCoupon;
    }

    public function getIsCoupon(){
        return $this->isCoupon;
    }
            
    private $isPG;
    
    public function setIsPG($isPG){
        $this->params['isPG'] = $isPG;
    }

    public function getIsPG(){
        return $this->isPG;
    }
            
    private $pingouPriceStart;
    
    public function setPingouPriceStart($pingouPriceStart){
        $this->params['pingouPriceStart'] = $pingouPriceStart;
    }

    public function getPingouPriceStart(){
        return $this->pingouPriceStart;
    }
            
    private $pingouPriceEnd;
    
    public function setPingouPriceEnd($pingouPriceEnd){
        $this->params['pingouPriceEnd'] = $pingouPriceEnd;
    }

    public function getPingouPriceEnd(){
        return $this->pingouPriceEnd;
    }
            
    private $isHot;
    
    public function setIsHot($isHot){
        $this->params['isHot'] = $isHot;
    }

    public function getIsHot(){
        return $this->isHot;
    }
            
    private $brandCode;
    
    public function setBrandCode($brandCode){
        $this->params['brandCode'] = $brandCode;
    }

    public function getBrandCode(){
        return $this->brandCode;
    }
            
    private $shopId;
    
    public function setShopId($shopId){
        $this->params['shopId'] = $shopId;
    }

    public function getShopId(){
        return $this->shopId;
    }
            
    private $hasContent;
    
    public function setHasContent($hasContent){
        $this->params['hasContent'] = $hasContent;
    }

    public function getHasContent(){
        return $this->hasContent;
    }
            
    private $hasBestCoupon;
    
    public function setHasBestCoupon($hasBestCoupon){
        $this->params['hasBestCoupon'] = $hasBestCoupon;
    }

    public function getHasBestCoupon(){
        return $this->hasBestCoupon;
    }
            
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
    }
            
    private $fields;
    
    public function setFields($fields){
        $this->params['fields'] = $fields;
    }

    public function getFields(){
        return $this->fields;
    }
            
    private $forbidTypes;
    
    public function setForbidTypes($forbidTypes){
        $this->params['forbidTypes'] = $forbidTypes;
    }

    public function getForbidTypes(){
        return $this->forbidTypes;
    }
            
    private $jxFlags;
    
    public function setJxFlags($jxFlags){
        $this->params['jxFlags'] = $jxFlags;
    }

    public function getJxFlags(){
        return $this->jxFlags;
    }
            
    private $shopLevelFrom;
    
    public function setShopLevelFrom($shopLevelFrom){
        $this->params['shopLevelFrom'] = $shopLevelFrom;
    }

    public function getShopLevelFrom(){
        return $this->shopLevelFrom;
    }
            
    private $isbn;
    
    public function setIsbn($isbn){
        $this->params['isbn'] = $isbn;
    }

    public function getIsbn(){
        return $this->isbn;
    }
            
    private $spuId;
    
    public function setSpuId($spuId){
        $this->params['spuId'] = $spuId;
    }

    public function getSpuId(){
        return $this->spuId;
    }
            
    private $couponUrl;
    
    public function setCouponUrl($couponUrl){
        $this->params['couponUrl'] = $couponUrl;
    }

    public function getCouponUrl(){
        return $this->couponUrl;
    }
            
    private $deliveryType;
    
    public function setDeliveryType($deliveryType){
        $this->params['deliveryType'] = $deliveryType;
    }

    public function getDeliveryType(){
        return $this->deliveryType;
    }
            
    private $eliteType;
    
    public function setEliteType($eliteType){
        $this->params['eliteType'] = $eliteType;
    }

    public function getEliteType(){
        return $this->eliteType;
    }
            
    private $isSeckill;
    
    public function setIsSeckill($isSeckill){
        $this->params['isSeckill'] = $isSeckill;
    }

    public function getIsSeckill(){
        return $this->isSeckill;
    }
            
    private $isPresale;
    
    public function setIsPresale($isPresale){
        $this->params['isPresale'] = $isPresale;
    }

    public function getIsPresale(){
        return $this->isPresale;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>