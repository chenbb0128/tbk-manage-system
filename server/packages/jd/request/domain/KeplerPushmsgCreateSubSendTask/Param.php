<?php
namespace KeplerPushmsgCreateSubSendTask;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.k.dto.SubSendTaskParamJos";
    }
        
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $contentData;
            
    public function setContentData($contentData){
        $this->params['contentData'] = $contentData ->getInstance();
    }
        
            
    private $businessCode;
    
    public function setBusinessCode($businessCode){
        $this->params['businessCode'] = $businessCode;
    }

    public function getBusinessCode(){
        return $this->businessCode;
    }
            
    private $otherParamsData;
            
    public function setOtherParamsData($otherParamsData){
        $this->params['otherParamsData'] = $otherParamsData ->getInstance();
    }
        
            
    private $sendTime;
    
    public function setSendTime($sendTime){
        $this->params['sendTime'] = $sendTime;
    }

    public function getSendTime(){
        return $this->sendTime;
    }
            
    private $sendType;
    
    public function setSendType($sendType){
        $this->params['sendType'] = $sendType;
    }

    public function getSendType(){
        return $this->sendType;
    }
            
    private $jumpPage;
    
    public function setJumpPage($jumpPage){
        $this->params['jumpPage'] = $jumpPage;
    }

    public function getJumpPage(){
        return $this->jumpPage;
    }
            
    private $businessId;
    
    public function setBusinessId($businessId){
        $this->params['businessId'] = $businessId;
    }

    public function getBusinessId(){
        return $this->businessId;
    }
            
    private $miniprogramState;
    
    public function setMiniprogramState($miniprogramState){
        $this->params['miniprogramState'] = $miniprogramState;
    }

    public function getMiniprogramState(){
        return $this->miniprogramState;
    }
            
    private $channel;
    
    public function setChannel($channel){
        $this->params['channel'] = $channel;
    }

    public function getChannel(){
        return $this->channel;
    }
            
    private $taskName;
    
    public function setTaskName($taskName){
        $this->params['taskName'] = $taskName;
    }

    public function getTaskName(){
        return $this->taskName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>