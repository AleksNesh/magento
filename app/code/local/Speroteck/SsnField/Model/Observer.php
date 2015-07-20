<?php

class Speroteck_SsnField_Model_Observer
{

    public function saveSsn($evt)
    {
        /* @var $controller Mage_Checkout_OnepageController */
        $controller = $evt->getData("controller_action");

        /* @var  $request Mage_Core_Controller_Request_Http */
        $request = $controller->getRequest();
        $params = $request->getParams();
        $ssn = $params["custom"]["ssn"];

        $_SESSION["ssn"] = $ssn;
    }

    public function updateOrder($evt)
    {
        /* @var $order Mage_Sales_Model_Order */
        $order = $evt->getData("order");

        $order->setSsn($_SESSION["ssn"]);
        $order->save();
    }
}
