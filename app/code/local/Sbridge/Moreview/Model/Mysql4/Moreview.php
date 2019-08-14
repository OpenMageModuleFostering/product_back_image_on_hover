<?php

/**
* Setubridge Technolabs
* http://www.setubridge.com/
* @author SetuBridge
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
**/
?>
<?php

class Sbridge_Moreview_Model_Mysql4_Moreview extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the moreview_id refers to the key field in your database table.
        $this->_init('moreview/moreview', 'moreview_id');
    }
}