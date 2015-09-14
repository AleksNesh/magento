<?php
class Speroteck_ExtNav_Model_Resource_Item_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('extnav/item');
    }
}

/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/10/15
 * Time: 4:39 AM
 */