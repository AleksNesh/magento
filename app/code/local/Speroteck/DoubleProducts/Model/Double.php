<?php
 class Speroteck_DoubleProducts_Model_Double extends Mage_Checkout_Model_Cart
 {
     public function addProduct($productInfo, $requestInfo=null) {
         $requestInfo["qty"] = $requestInfo["qty"] * 2;
         return parent::addProduct($productInfo, $requestInfo);
     }
 }