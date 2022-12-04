<?php
namespace KplOpenWfpVscVerifiedNotify;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.VerifyNotify";
    }
        
    private $recordList;
                                        
    public function setRecordList($recordList){
        $size = count($recordList);
        for ($i=0; $i<$size; $i++){
            $recordList [$i] = $recordList [$i] ->getInstance();
        }
        $this->params['recordList'] = $recordList;
    }
                                    
            
    private $transactionId;
    
    public function setTransactionId($transactionId){
        $this->params['transactionId'] = $transactionId;
    }

    public function getTransactionId(){
        return $this->transactionId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>