<?php
namespace KeplerPushmsgCreateSubSendTask;
class ContentData{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $cMap;
    
    public function setCMap($cMap){
        $this->params['cMap'] = $cMap;
    }

    public function getCMap(){
        return $this->cMap;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>