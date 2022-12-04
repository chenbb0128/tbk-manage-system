<?php
namespace KeplerPushmsgSendSingleSubMsg;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $dMap;
    
    public function setDMap($dMap){
        $this->params['dMap'] = $dMap;
    }

    public function getDMap(){
        return $this->dMap;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>