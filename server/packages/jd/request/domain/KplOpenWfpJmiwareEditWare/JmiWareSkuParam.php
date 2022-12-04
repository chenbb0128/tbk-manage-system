<?php
namespace KplOpenWfpJmiwareEditWare;
class JmiWareSkuParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.JmiWareSkuParam";
    }
        
    private $jSkuId;
    
    public function setJSkuId($jSkuId){
        $this->params['jSkuId'] = $jSkuId;
    }

    public function getJSkuId(){
        return $this->jSkuId;
    }
            
    private $jWareId;
    
    public function setJWareId($jWareId){
        $this->params['jWareId'] = $jWareId;
    }

    public function getJWareId(){
        return $this->jWareId;
    }
            
    private $outerId;
    
    public function setOuterId($outerId){
        $this->params['outerId'] = $outerId;
    }

    public function getOuterId(){
        return $this->outerId;
    }
            
    private $skuPrice;
    
    public function setSkuPrice($skuPrice){
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice(){
        return $this->skuPrice;
    }
            
    private $quantity;
    
    public function setQuantity($quantity){
        $this->params['quantity'] = $quantity;
    }

    public function getQuantity(){
        return $this->quantity;
    }
            
    private $indexOuterId;
    
    public function setIndexOuterId($indexOuterId){
        $this->params['indexOuterId'] = $indexOuterId;
    }

    public function getIndexOuterId(){
        return $this->indexOuterId;
    }
            
    private $saleList;
                                        
    public function setSaleList($saleList){
        $size = count($saleList);
        for ($i=0; $i<$size; $i++){
            $saleList [$i] = $saleList [$i] ->getInstance();
        }
        $this->params['saleList'] = $saleList;
    }
                                    
            
    private $extSetting;
                                        
    public function setExtSetting($extSetting){
        $size = count($extSetting);
        for ($i=0; $i<$size; $i++){
            $extSetting [$i] = $extSetting [$i] ->getInstance();
        }
        $this->params['extSetting'] = $extSetting;
    }
                                    
            
    private $preStock;
    
    public function setPreStock($preStock){
        $this->params['preStock'] = $preStock;
    }

    public function getPreStock(){
        return $this->preStock;
    }
            
    private $mainVideoId;
    
    public function setMainVideoId($mainVideoId){
        $this->params['mainVideoId'] = $mainVideoId;
    }

    public function getMainVideoId(){
        return $this->mainVideoId;
    }
            
    private $infoVideoId;
    
    public function setInfoVideoId($infoVideoId){
        $this->params['infoVideoId'] = $infoVideoId;
    }

    public function getInfoVideoId(){
        return $this->infoVideoId;
    }
            
    private $mainVideoUrl;
    
    public function setMainVideoUrl($mainVideoUrl){
        $this->params['mainVideoUrl'] = $mainVideoUrl;
    }

    public function getMainVideoUrl(){
        return $this->mainVideoUrl;
    }
            
    private $infoVideoUrl;
    
    public function setInfoVideoUrl($infoVideoUrl){
        $this->params['infoVideoUrl'] = $infoVideoUrl;
    }

    public function getInfoVideoUrl(){
        return $this->infoVideoUrl;
    }
            
    private $jmiSkuPrices;
                                        
    public function setJmiSkuPrices($jmiSkuPrices){
        $size = count($jmiSkuPrices);
        for ($i=0; $i<$size; $i++){
            $jmiSkuPrices [$i] = $jmiSkuPrices [$i] ->getInstance();
        }
        $this->params['jmiSkuPrices'] = $jmiSkuPrices;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>