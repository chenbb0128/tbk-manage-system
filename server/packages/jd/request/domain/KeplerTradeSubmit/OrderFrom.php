<?php
namespace KeplerTradeSubmit;
class OrderFrom{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.OrderFrom";
    }
        
    private $webOriginId;
    
    public function setWebOriginId($webOriginId){
        $this->params['webOriginId'] = $webOriginId;
    }

    public function getWebOriginId(){
        return $this->webOriginId;
    }
            
    private $flowId;
    
    public function setFlowId($flowId){
        $this->params['flowId'] = $flowId;
    }

    public function getFlowId(){
        return $this->flowId;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
    }
            
    private $originId;
    
    public function setOriginId($originId){
        $this->params['originId'] = $originId;
    }

    public function getOriginId(){
        return $this->originId;
    }
            
    private $easybuy;
    
    public function setEasybuy($easybuy){
        $this->params['easybuy'] = $easybuy;
    }

    public function getEasybuy(){
        return $this->easybuy;
    }
            
    private $locBuy;
    
    public function setLocBuy($locBuy){
        $this->params['locBuy'] = $locBuy;
    }

    public function getLocBuy(){
        return $this->locBuy;
    }
            
    private $giftbuy;
    
    public function setGiftbuy($giftbuy){
        $this->params['giftbuy'] = $giftbuy;
    }

    public function getGiftbuy(){
        return $this->giftbuy;
    }
            
    private $lipinkaPhysical;
    
    public function setLipinkaPhysical($lipinkaPhysical){
        $this->params['lipinkaPhysical'] = $lipinkaPhysical;
    }

    public function getLipinkaPhysical(){
        return $this->lipinkaPhysical;
    }
            
    private $contractMachine;
    
    public function setContractMachine($contractMachine){
        $this->params['contractMachine'] = $contractMachine;
    }

    public function getContractMachine(){
        return $this->contractMachine;
    }
            
    private $whiteBar;
    
    public function setWhiteBar($whiteBar){
        $this->params['whiteBar'] = $whiteBar;
    }

    public function getWhiteBar(){
        return $this->whiteBar;
    }
            
    private $resetDefaultAddress;
    
    public function setResetDefaultAddress($resetDefaultAddress){
        $this->params['resetDefaultAddress'] = $resetDefaultAddress;
    }

    public function getResetDefaultAddress(){
        return $this->resetDefaultAddress;
    }
            
    private $resetResevsion;
    
    public function setResetResevsion($resetResevsion){
        $this->params['resetResevsion'] = $resetResevsion;
    }

    public function getResetResevsion(){
        return $this->resetResevsion;
    }
            
    private $flowType;
    
    public function setFlowType($flowType){
        $this->params['flowType'] = $flowType;
    }

    public function getFlowType(){
        return $this->flowType;
    }
            
    private $factoryShopId;
    
    public function setFactoryShopId($factoryShopId){
        $this->params['factoryShopId'] = $factoryShopId;
    }

    public function getFactoryShopId(){
        return $this->factoryShopId;
    }
            
    private $factoryRegionId;
    
    public function setFactoryRegionId($factoryRegionId){
        $this->params['factoryRegionId'] = $factoryRegionId;
    }

    public function getFactoryRegionId(){
        return $this->factoryRegionId;
    }
            
    private $presale;
    
    public function setPresale($presale){
        $this->params['presale'] = $presale;
    }

    public function getPresale(){
        return $this->presale;
    }
            
    private $invokeNewCouponInterface;
    
    public function setInvokeNewCouponInterface($invokeNewCouponInterface){
        $this->params['invokeNewCouponInterface'] = $invokeNewCouponInterface;
    }

    public function getInvokeNewCouponInterface(){
        return $this->invokeNewCouponInterface;
    }
            
    private $resetFlag;
    
    public function setResetFlag($resetFlag){
        $this->params['resetFlag'] = $resetFlag;
    }

    public function getResetFlag(){
        return $this->resetFlag;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>