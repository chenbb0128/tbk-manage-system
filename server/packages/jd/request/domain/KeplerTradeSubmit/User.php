<?php
namespace KeplerTradeSubmit;
class User{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.UserReq";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $level;
    
    public function setLevel($level){
        $this->params['level'] = $level;
    }

    public function getLevel(){
        return $this->level;
    }
            
    private $flagInfo;
    
    public function setFlagInfo($flagInfo){
        $this->params['flagInfo'] = $flagInfo;
    }

    public function getFlagInfo(){
        return $this->flagInfo;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>