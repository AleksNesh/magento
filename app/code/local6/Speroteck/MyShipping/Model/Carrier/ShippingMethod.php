<?php

class Speroteck_MyShipping_Model_Carrier_ShippingMethod extends Mage_Shipping_Model_Carrier_Abstract implements Mage_Shipping_Model_Carrier_Interface {

    protected $_code = 'myshipping';

    public function collectRates(Mage_Shipping_Model_Rate_Request $request)
    {
        $result = Mage::getModel('shipping/rate_result');

        $method = Mage :: getModel('shipping/rate_result_method');
        $method->setCarrier($this->_code);

        $method->setMethod($this->_code);
        $method->setMethodTitle("A");
        $method->setCost(100);
        $method->setPrice(100);

        $result->append($method);

        return $result;
    }

    public function getAllowedMethods() {
        return array($this->_code => "A");
    }
}