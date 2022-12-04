<?php
namespace KeplerTradeSubmit;
class Freight{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.OrderFreightParam";
    }
        
    private $generalFreight;
            
    public function setGeneralFreight($generalFreight){
        $this->params['generalFreight'] = $generalFreight ->getInstance();
    }
        
            
    private $remoteRegionFreightList;
                                        
    public function setRemoteRegionFreightList($remoteRegionFreightList){
        $size = count($remoteRegionFreightList);
        for ($i=0; $i<$size; $i++){
            $remoteRegionFreightList [$i] = $remoteRegionFreightList [$i] ->getInstance();
        }
        $this->params['remoteRegionFreightList'] = $remoteRegionFreightList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>