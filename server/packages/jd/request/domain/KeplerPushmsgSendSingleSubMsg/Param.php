<?php
namespace KeplerPushmsgSendSingleSubMsg;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.k.dto.SubMsgSendDtoJos";
    }
        
    private $miniProgramState;
    
    public function setMiniProgramState($miniProgramState){
        $this->params['miniProgramState'] = $miniProgramState;
    }

    public function getMiniProgramState(){
        return $this->miniProgramState;
    }
            
    private $otherParams;
            
    public function setOtherParams($otherParams){
        $this->params['otherParams'] = $otherParams ->getInstance();
    }
        
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $businessCode;
    
    public function setBusinessCode($businessCode){
        $this->params['businessCode'] = $businessCode;
    }

    public function getBusinessCode(){
        return $this->businessCode;
    }
            
    private $data;
            
    public function setData($data){
        $this->params['data'] = $data ->getInstance();
    }
        
            
    private $businessId;
    
    public function setBusinessId($businessId){
        $this->params['businessId'] = $businessId;
    }

    public function getBusinessId(){
        return $this->businessId;
    }
            
    private $openId;
    
    public function setOpenId($openId){
        $this->params['openId'] = $openId;
    }

    public function getOpenId(){
        return $this->openId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>