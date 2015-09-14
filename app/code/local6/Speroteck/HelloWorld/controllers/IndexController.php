<?php
class Speroteck_HelloWorld_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function testAction()
    {

       $attribute = Mage::getSingleton('eav/config')->getAttribute('catalog_product', 'color');
        if ($attribute->usesSource()) {
            $options = $attribute->getSource()->getAllOptions(false);
            var_dump($options);
        }
        /*$collection = Mage::getModel('catalog/product')->getCollection();
        $collection->addFieldToFilter('color', '20');*/


       /* foreach ($collection as $product)
        {
            $product->
            var_dump($product);
        }*/


//        foreach ($options as $option) {
//            echo $option["label"] . "<br/>";
//        }

        // echo $label;

        /*$this->loadLayout(array("default", "helloworld_index_index"));
        $output = $this->getLayout()->getOutput();
        echo "hello111";
        echo $output;
        echo "hello222";
        */
        // echo $this->getLayout()->getNode()->asNiceXml();
        // var_dump($this->getLayout()); die;
        // echo "Hello, World!";
    }
}
