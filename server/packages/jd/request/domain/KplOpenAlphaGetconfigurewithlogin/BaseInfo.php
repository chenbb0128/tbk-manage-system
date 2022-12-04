<?php
namespace KplOpenAlphaGetconfigurewithlogin;
class BaseInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.alpha.config.params.AlphaGWRequestBaseInfo";
    }
        
    private $app_key;
    
    public function setApp_key($app_key){
        $this->params['app_key'] = $app_key;
    }

    public function getApp_key(){
        return $this->app_key;
    }
            
    private $pin_key;
    
    public function setPin_key($pin_key){
        $this->params['pin_key'] = $pin_key;
    }

    public function getPin_key(){
        return $this->pin_key;
    }
            
    private $device_id;
    
    public function setDevice_id($device_id){
        $this->params['device_id'] = $device_id;
    }

    public function getDevice_id(){
        return $this->device_id;
    }
            
    private $mac_address;
    
    public function setMac_address($mac_address){
        $this->params['mac_address'] = $mac_address;
    }

    public function getMac_address(){
        return $this->mac_address;
    }
            
    private $sn;
    
    public function setSn($sn){
        $this->params['sn'] = $sn;
    }

    public function getSn(){
        return $this->sn;
    }
            
    private $version;
    
    public function setVersion($version){
        $this->params['version'] = $version;
    }

    public function getVersion(){
        return $this->version;
    }
            
    private $os_type;
    
    public function setOs_type($os_type){
        $this->params['os_type'] = $os_type;
    }

    public function getOs_type(){
        return $this->os_type;
    }
            
    private $app_version;
    
    public function setApp_version($app_version){
        $this->params['app_version'] = $app_version;
    }

    public function getApp_version(){
        return $this->app_version;
    }
            
    private $timestamp;
    
    public function setTimestamp($timestamp){
        $this->params['timestamp'] = $timestamp;
    }

    public function getTimestamp(){
        return $this->timestamp;
    }
            
    private $skill;
    
    public function setSkill($skill){
        $this->params['skill'] = $skill;
    }

    public function getSkill(){
        return $this->skill;
    }
            
    private $command;
    
    public function setCommand($command){
        $this->params['command'] = $command;
    }

    public function getCommand(){
        return $this->command;
    }
            
    private $source_type;
    
    public function setSource_type($source_type){
        $this->params['source_type'] = $source_type;
    }

    public function getSource_type(){
        return $this->source_type;
    }
            
    private $extend;
    
    public function setExtend($extend){
        $this->params['extend'] = $extend;
    }

    public function getExtend(){
        return $this->extend;
    }
            
    private $client_ip;
    
    public function setClient_ip($client_ip){
        $this->params['client_ip'] = $client_ip;
    }

    public function getClient_ip(){
        return $this->client_ip;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>