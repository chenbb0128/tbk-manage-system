<?php
namespace KeplerSettledAftermarketQueryservicedetail;
class QueryServiceDetailParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kepler.trade.sdk.export.aftermarket.domain.QueryServiceDetailParam";
    }
        
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $operatorInfoParam;
            
    public function setOperatorInfoParam($operatorInfoParam){
        $this->params['operatorInfoParam'] = $operatorInfoParam ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>