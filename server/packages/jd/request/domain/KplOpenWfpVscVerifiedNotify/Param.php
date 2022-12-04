<?php
namespace KplOpenWfpVscVerifiedNotify;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $merchantRequestWrap;
            
    public function setMerchantRequestWrap($merchantRequestWrap){
        $this->params['merchantRequestWrap'] = $merchantRequestWrap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>