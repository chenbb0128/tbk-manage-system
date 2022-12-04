<?php
namespace KeplerPushmsgCreateSubSendTask;
class OtherParamsData{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $opMap;
    
    public function setOpMap($opMap){
        $this->params['opMap'] = $opMap;
    }

    public function getOpMap(){
        return $this->opMap;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>