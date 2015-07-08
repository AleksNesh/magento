<?php
class Speroteck_ExtNav_Model_Resource_Item extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('extnav/item', 'id');
    }
}

/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/10/15
 * Time: 4:37 AM
 */