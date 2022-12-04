<?php
namespace KeplerTradeSubmit;
class OrderParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.trade.domain.order.SubmitOrderParam";
    }
        
    private $orderUnionParam;
            
    public function setOrderUnionParam($orderUnionParam){
        $this->params['orderUnionParam'] = $orderUnionParam ->getInstance();
    }
        
            
    private $payPassword;
    
    public function setPayPassword($payPassword){
        $this->params['payPassword'] = $payPassword;
    }

    public function getPayPassword(){
        return $this->payPassword;
    }
            
    private $checkcodeTxt;
    
    public function setCheckcodeTxt($checkcodeTxt){
        $this->params['checkcodeTxt'] = $checkcodeTxt;
    }

    public function getCheckcodeTxt(){
        return $this->checkcodeTxt;
    }
            
    private $checkCodeAnswer;
    
    public function setCheckCodeAnswer($checkCodeAnswer){
        $this->params['checkCodeAnswer'] = $checkCodeAnswer;
    }

    public function getCheckCodeAnswer(){
        return $this->checkCodeAnswer;
    }
            
    private $trackID;
    
    public function setTrackID($trackID){
        $this->params['trackID'] = $trackID;
    }

    public function getTrackID(){
        return $this->trackID;
    }
            
    private $userAgent;
    
    public function setUserAgent($userAgent){
        $this->params['userAgent'] = $userAgent;
    }

    public function getUserAgent(){
        return $this->userAgent;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $sopNotPutInvoice;
    
    public function setSopNotPutInvoice($sopNotPutInvoice){
        $this->params['sopNotPutInvoice'] = $sopNotPutInvoice;
    }

    public function getSopNotPutInvoice(){
        return $this->sopNotPutInvoice;
    }
            
    private $presaleMobile;
    
    public function setPresaleMobile($presaleMobile){
        $this->params['presaleMobile'] = $presaleMobile;
    }

    public function getPresaleMobile(){
        return $this->presaleMobile;
    }
            
    private $presalePayType;
    
    public function setPresalePayType($presalePayType){
        $this->params['presalePayType'] = $presalePayType;
    }

    public function getPresalePayType(){
        return $this->presalePayType;
    }
            
    private $giftBuyHidePrice;
    
    public function setGiftBuyHidePrice($giftBuyHidePrice){
        $this->params['giftBuyHidePrice'] = $giftBuyHidePrice;
    }

    public function getGiftBuyHidePrice(){
        return $this->giftBuyHidePrice;
    }
            
    private $checkCodeRid;
    
    public function setCheckCodeRid($checkCodeRid){
        $this->params['checkCodeRid'] = $checkCodeRid;
    }

    public function getCheckCodeRid(){
        return $this->checkCodeRid;
    }
            
    private $paymentId;
    
    public function setPaymentId($paymentId){
        $this->params['paymentId'] = $paymentId;
    }

    public function getPaymentId(){
        return $this->paymentId;
    }
            
    private $orderGuid;
    
    public function setOrderGuid($orderGuid){
        $this->params['orderGuid'] = $orderGuid;
    }

    public function getOrderGuid(){
        return $this->orderGuid;
    }
            
    private $address;
            
    public function setAddress($address){
        $this->params['address'] = $address ->getInstance();
    }
        
            
    private $combinationPayment;
            
    public function setCombinationPayment($combinationPayment){
        $this->params['combinationPayment'] = $combinationPayment ->getInstance();
    }
        
            
    private $invoice;
            
    public function setInvoice($invoice){
        $this->params['invoice'] = $invoice ->getInstance();
    }
        
            
    private $freight;
            
    public function setFreight($freight){
        $this->params['freight'] = $freight ->getInstance();
    }
        
            
    private $orderNeedMoney;
    
    public function setOrderNeedMoney($orderNeedMoney){
        $this->params['orderNeedMoney'] = $orderNeedMoney;
    }

    public function getOrderNeedMoney(){
        return $this->orderNeedMoney;
    }
            
    private $orderNeedMoneyStr;
    
    public function setOrderNeedMoneyStr($orderNeedMoneyStr){
        $this->params['orderNeedMoneyStr'] = $orderNeedMoneyStr;
    }

    public function getOrderNeedMoneyStr(){
        return $this->orderNeedMoneyStr;
    }
            
    private $clientInfo;
            
    public function setClientInfo($clientInfo){
        $this->params['clientInfo'] = $clientInfo ->getInstance();
    }
        
            
    private $orderFrom;
            
    public function setOrderFrom($orderFrom){
        $this->params['orderFrom'] = $orderFrom ->getInstance();
    }
        
            
    private $clientPin;
    
    public function setClientPin($clientPin){
        $this->params['clientPin'] = $clientPin;
    }

    public function getClientPin(){
        return $this->clientPin;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $serverName;
    
    public function setServerName($serverName){
        $this->params['serverName'] = $serverName;
    }

    public function getServerName(){
        return $this->serverName;
    }
            
    private $userIP;
    
    public function setUserIP($userIP){
        $this->params['userIP'] = $userIP;
    }

    public function getUserIP(){
        return $this->userIP;
    }
            
    private $countKey;
    
    public function setCountKey($countKey){
        $this->params['countKey'] = $countKey;
    }

    public function getCountKey(){
        return $this->countKey;
    }
            
    private $userKey;
    
    public function setUserKey($userKey){
        $this->params['userKey'] = $userKey;
    }

    public function getUserKey(){
        return $this->userKey;
    }
            
    private $requestPath;
    
    public function setRequestPath($requestPath){
        $this->params['requestPath'] = $requestPath;
    }

    public function getRequestPath(){
        return $this->requestPath;
    }
            
    private $repAbsPathPrex;
    
    public function setRepAbsPathPrex($repAbsPathPrex){
        $this->params['repAbsPathPrex'] = $repAbsPathPrex;
    }

    public function getRepAbsPathPrex(){
        return $this->repAbsPathPrex;
    }
            
    private $fullName;
    
    public function setFullName($fullName){
        $this->params['fullName'] = $fullName;
    }

    public function getFullName(){
        return $this->fullName;
    }
            
    private $gendan;
            
    public function setGendan($gendan){
        $this->params['gendan'] = $gendan ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>