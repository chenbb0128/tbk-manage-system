<?php
namespace KplOpenWfpVscMakeCertCallback;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.MakingCertResult";
    }
        
    private $certList;
                                        
    public function setCertList($certList){
        $size = count($certList);
        for ($i=0; $i<$size; $i++){
            $certList [$i] = $certList [$i] ->getInstance();
        }
        $this->params['certList'] = $certList;
    }
                                    
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $errMsg;
    
    public function setErrMsg($errMsg){
        $this->params['errMsg'] = $errMsg;
    }

    public function getErrMsg(){
        return $this->errMsg;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>