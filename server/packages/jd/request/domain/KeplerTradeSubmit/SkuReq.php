<?php
namespace KeplerTradeSubmit;
class SkuReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.SkuReq";
    }
        
    private $sku;
    
    public function setSku($sku){
        $this->params['sku'] = $sku;
    }

    public function getSku(){
        return $this->sku;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $tagList;
    
    public function setTagList($tagList){
        $this->params['tagList'] = $tagList;
    }

    public function getTagList(){
        return $this->tagList;
    }
            
    private $selectedPromoIdList;
    
    public function setSelectedPromoIdList($selectedPromoIdList){
        $this->params['selectedPromoIdList'] = $selectedPromoIdList;
    }

    public function getSelectedPromoIdList(){
        return $this->selectedPromoIdList;
    }
            
    private $thirdCategoryId;
    
    public function setThirdCategoryId($thirdCategoryId){
        $this->params['thirdCategoryId'] = $thirdCategoryId;
    }

    public function getThirdCategoryId(){
        return $this->thirdCategoryId;
    }
            
    private $vendor;
    
    public function setVendor($vendor){
        $this->params['vendor'] = $vendor;
    }

    public function getVendor(){
        return $this->vendor;
    }
            
    private $vendorType;
    
    public function setVendorType($vendorType){
        $this->params['vendorType'] = $vendorType;
    }

    public function getVendorType(){
        return $this->vendorType;
    }
            
    private $giftSkuRequestList;
                                        
    public function setGiftSkuRequestList($giftSkuRequestList){
        $size = count($giftSkuRequestList);
        for ($i=0; $i<$size; $i++){
            $giftSkuRequestList [$i] = $giftSkuRequestList [$i] ->getInstance();
        }
        $this->params['giftSkuRequestList'] = $giftSkuRequestList;
    }
                                    
            
    private $skuExtentionReq;
            
    public function setSkuExtentionReq($skuExtentionReq){
        $this->params['skuExtentionReq'] = $skuExtentionReq ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>