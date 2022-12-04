<?php
namespace KeplerOrderDefray;
class DefrayReqParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.defray.domain.DefrayReqParam";
    }
        
    private $customerAlias;
    
    public function setCustomerAlias($customerAlias){
        $this->params['customerAlias'] = $customerAlias;
    }

    public function getCustomerAlias(){
        return $this->customerAlias;
    }
            
    private $defrayParamStr;
    
    public function setDefrayParamStr($defrayParamStr){
        $this->params['defrayParamStr'] = $defrayParamStr;
    }

    public function getDefrayParamStr(){
        return $this->defrayParamStr;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>