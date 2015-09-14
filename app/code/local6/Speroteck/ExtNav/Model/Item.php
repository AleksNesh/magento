<?php
class Speroteck_ExtNav_Model_Item extends Mage_Core_Model_Abstract
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
 * Time: 4:36 AM
 */