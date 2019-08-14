<?php

/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php

class Sbridge_Moreview_Block_Adminhtml_Moreview_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'moreview';
        $this->_controller = 'adminhtml_moreview';
        
        $this->_updateButton('save', 'label', Mage::helper('moreview')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('moreview')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('moreview_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'moreview_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'moreview_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('moreview_data') && Mage::registry('moreview_data')->getId() ) {
            return Mage::helper('moreview')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('moreview_data')->getTitle()));
        } else {
            return Mage::helper('moreview')->__('Add Item');
        }
    }
}