<?php
namespace KeplerTradeSubmit;
class GeneralFreight{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.GeneralFreightParam";
    }
        
    private $freight;
    
    public function setFreight($freight){
        $this->params['freight'] = $freight;
    }

    public function getFreight(){
        return $this->freight;
    }
            
    private $verderId;
    
    public function setVerderId($verderId){
        $this->params['verderId'] = $verderId;
    }

    public function getVerderId(){
        return $this->verderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>