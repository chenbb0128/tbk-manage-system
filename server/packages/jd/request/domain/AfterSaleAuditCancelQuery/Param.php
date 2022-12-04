<?php
namespace AfterSaleAuditCancelQuery;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.QueryParamVo";
    }
        
    private $approveNotes;
    
    public function setApproveNotes($approveNotes){
        $this->params['approveNotes'] = $approveNotes;
    }

    public function getApproveNotes(){
        return $this->approveNotes;
    }
            
    private $serviceIdList;
                        
    public function setServiceIdList($serviceIdList){
        $this->params['serviceIdList'] = $serviceIdList;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>