<?php
namespace KeplerTradeSubmit;
class SuitReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.SuitReq";
    }
        
    private $promotionId;
    
    public function setPromotionId($promotionId){
        $this->params['promotionId'] = $promotionId;
    }

    public function getPromotionId(){
        return $this->promotionId;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $skuList;
                                        
    public function setSkuList($skuList){
        $size = count($skuList);
        for ($i=0; $i<$size; $i++){
            $skuList [$i] = $skuList [$i] ->getInstance();
        }
        $this->params['skuList'] = $skuList;
    }
                                    
            
    private $vskuId;
    
    public function setVskuId($vskuId){
        $this->params['vskuId'] = $vskuId;
    }

    public function getVskuId(){
        return $this->vskuId;
    }
            
    private $virtualSuitType;
    
    public function setVirtualSuitType($virtualSuitType){
        $this->params['virtualSuitType'] = $virtualSuitType;
    }

    public function getVirtualSuitType(){
        return $this->virtualSuitType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>