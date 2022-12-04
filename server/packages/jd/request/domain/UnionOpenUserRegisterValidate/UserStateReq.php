<?php
namespace UnionOpenUserRegisterValidate;
class UserStateReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.user.UserStateReq";
    }
        
    private $userId;
    
    public function setUserId($userId){
        $this->params['userId'] = $userId;
    }

    public function getUserId(){
        return $this->userId;
    }
            
    private $userIdType;
    
    public function setUserIdType($userIdType){
        $this->params['userIdType'] = $userIdType;
    }

    public function getUserIdType(){
        return $this->userIdType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>