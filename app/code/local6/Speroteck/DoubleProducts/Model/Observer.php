<?php
class Speroteck_DoubleProducts_Model_Observer
{
    function addToCartRequest($event) {
        /* @var $event Varien_Event_Observer */
        $request = Mage::app()->getRequest();
        $newQty = $request->getParam("qty") * 2;
        $request->setParam("qty", $newQty);
    }
}