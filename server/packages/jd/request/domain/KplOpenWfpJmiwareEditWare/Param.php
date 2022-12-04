<?php
namespace KplOpenWfpJmiwareEditWare;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $jmiWareParam;
            
    public function setJmiWareParam($jmiWareParam){
        $this->params['jmiWareParam'] = $jmiWareParam ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>