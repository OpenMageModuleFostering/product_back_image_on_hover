<?php

/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php

class Sbridge_Moreview_Block_Adminhtml_Moreview_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('moreview_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('moreview')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('moreview')->__('Item Information'),
          'title'     => Mage::helper('moreview')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('moreview/adminhtml_moreview_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}