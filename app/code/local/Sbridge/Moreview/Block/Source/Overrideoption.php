<?php
/** Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
class Sbridge_Moreview_Block_Source_Overrideoption extends Mage_Adminhtml_Block_System_Config_Form_Field
{
   
protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
{ 
    $html = $element->getElementHtml();
    $curMageVer=Mage::getVersion();
     if($curMageVer >= '1.9.0.0'){
         $html .= '<script type="text/javascript">
                $("row_moreview_section_general_group_override_listfile").hide();
                </script>';
     }
    return $html;
}
}