<?php
namespace KplOpenRankInfoGatherService;
class Params{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $poolId;
    
    public function setPoolId($poolId){
        $this->params['poolId'] = $poolId;
    }

    public function getPoolId(){
        return $this->poolId;
    }
            
    private $cntMap;
            
    public function setCntMap($cntMap){
        $this->params['cntMap'] = $cntMap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>