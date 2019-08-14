<?php

/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php
class Sbridge_Moreview_Block_Adminhtml_Moreview extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_moreview';
    $this->_blockGroup = 'moreview';
    $this->_headerText = Mage::helper('moreview')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('moreview')->__('Add Item');
    parent::__construct();
  }
}