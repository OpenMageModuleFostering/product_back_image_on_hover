<?php

/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php
class Sbridge_Moreview_Block_Moreview extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getMoreview()     
     { 
        if (!$this->hasData('moreview')) {
            $this->setData('moreview', Mage::registry('moreview'));
        }
        return $this->getData('moreview');
        
    }
}