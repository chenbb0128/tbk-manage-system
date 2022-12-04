<?php
namespace KeplerTradeSubmit;
class SkuExtentionReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.SkuExtentionReq";
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
    
    function getInstance(){
        return $this->params;
    }

}

?>