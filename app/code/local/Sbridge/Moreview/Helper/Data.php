<?php
/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php
class Sbridge_Moreview_Helper_Data extends Mage_Core_Helper_Abstract
{
 public function setmoreview(){
    return $this->_setMoreViewTempate();
 } 
 public function setmoreviewlist(){
    return $this->_setMoreViewTempate();
 }
 public function _setMoreViewTempate(){
        $curMageVer=Mage::getVersion();
        if($curMageVer >= '1.9.0.0'){
            return "moreview/moreview.phtml";
        }
        else{
            return "moreview/list.phtml";
        }
    }

    
}