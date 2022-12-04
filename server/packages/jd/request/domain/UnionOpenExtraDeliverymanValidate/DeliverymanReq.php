<?php
namespace UnionOpenExtraDeliverymanValidate;
class DeliverymanReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.extra.delivery.DeliverymanReq";
    }
        
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>