<?php

/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php

class Sbridge_Moreview_Block_Adminhtml_Moreview_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('moreview_form', array('legend'=>Mage::helper('moreview')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('moreview')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('moreview')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('moreview')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('moreview')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('moreview')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('moreview')->__('Content'),
          'title'     => Mage::helper('moreview')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getMoreviewData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getMoreviewData());
          Mage::getSingleton('adminhtml/session')->setMoreviewData(null);
      } elseif ( Mage::registry('moreview_data') ) {
          $form->setValues(Mage::registry('moreview_data')->getData());
      }
      return parent::_prepareForm();
  }
}