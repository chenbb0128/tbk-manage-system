<?php
namespace KeplerTradeSubmit;
class OrderUnionParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.OrderUnionParam";
    }
        
    private $unpl;
    
    public function setUnpl($unpl){
        $this->params['unpl'] = $unpl;
    }

    public function getUnpl(){
        return $this->unpl;
    }
            
    private $unionId;
    
    public function setUnionId($unionId){
        $this->params['unionId'] = $unionId;
    }

    public function getUnionId(){
        return $this->unionId;
    }
            
    private $unionSiteId;
    
    public function setUnionSiteId($unionSiteId){
        $this->params['unionSiteId'] = $unionSiteId;
    }

    public function getUnionSiteId(){
        return $this->unionSiteId;
    }
            
    private $unionUserName;
    
    public function setUnionUserName($unionUserName){
        $this->params['unionUserName'] = $unionUserName;
    }

    public function getUnionUserName(){
        return $this->unionUserName;
    }
            
    private $unionTime;
    
    public function setUnionTime($unionTime){
        $this->params['unionTime'] = $unionTime;
    }

    public function getUnionTime(){
        return $this->unionTime;
    }
            
    private $unionEx;
    
    public function setUnionEx($unionEx){
        $this->params['unionEx'] = $unionEx;
    }

    public function getUnionEx(){
        return $this->unionEx;
    }
            
    private $mt_xid;
    
    public function setMt_xid($mt_xid){
        $this->params['mt_xid'] = $mt_xid;
    }

    public function getMt_xid(){
        return $this->mt_xid;
    }
            
    private $mt_subsite;
    
    public function setMt_subsite($mt_subsite){
        $this->params['mt_subsite'] = $mt_subsite;
    }

    public function getMt_subsite(){
        return $this->mt_subsite;
    }
            
    private $mt_ext;
    
    public function setMt_ext($mt_ext){
        $this->params['mt_ext'] = $mt_ext;
    }

    public function getMt_ext(){
        return $this->mt_ext;
    }
            
    private $dmpjs;
    
    public function setDmpjs($dmpjs){
        $this->params['dmpjs'] = $dmpjs;
    }

    public function getDmpjs(){
        return $this->dmpjs;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>