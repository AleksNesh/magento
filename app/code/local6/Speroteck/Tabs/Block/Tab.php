<?php
class Speroteck_Tabs_Block_Tab extends Mage_Core_Block_Template {


    public function getAttributeOptions($attributeName) {
        $result = array();

        $attribute = Mage::getSingleton('eav/config')->getAttribute('catalog_product', $attributeName);
        if ($attribute->usesSource()) {
            $tmpArray = $attribute->getSource()->getAllOptions(false);
            foreach($tmpArray as $tmpData) {
                $result[ $tmpData["label"] ] = $tmpData["value"];
            }
        }

        return $result;
    }

    public function getProducts($attributeName, $attributeValue) {

        /* @var $product Mage_Catalog_Model_Product */

        $collection = Mage::getModel('catalog/product')->getCollection()
            ->addAttributeToSelect("*")
            /*->addAttributeToSelect("name")
            ->addAttributeToSelect("image")
            ->addAttributeToSelect("small_image")
            ->addAttributeToSelect("thumbnail")*/
            ->addFieldToFilter($attributeName, $attributeValue);

        return $collection;
    }
}