<?php
require_once "./app/code/core/Mage/Checkout/controllers/CartController.php";
class Speroteck_DoubleProducts_CartController extends Mage_Checkout_CartController
{

    public function addAction() {

        $request = $this->getRequest();
        $qty = $request->getParam("qty", 1);
        $request->setParam("qty",  $qty * 2);

        return parent::addAction();
    }
}
