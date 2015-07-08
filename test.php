<?php
require_once './app/Mage.php';

$mageRunCode = isset($_SERVER['MAGE_RUN_CODE']) ? $_SERVER['MAGE_RUN_CODE'] : '';
$mageRunType = isset($_SERVER['MAGE_RUN_TYPE']) ? $_SERVER['MAGE_RUN_TYPE'] : 'store';
Mage::app($mageRunCode, $mageRunType);

Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);

// ===========================

/* @var $collection Mage_Catalog_Model_Resource_Product_Collection */
$collection = Mage::getModel('catalog/product')->getCollection();

/* @var $product Mage_Catalog_Model_Product */
$product = $collection->getFirstItem();

// var_dump($product->getData());

$product = Mage::getModel("catalog/product")->load( $product->getId() );

/* @var $stockItem Mage_CatalogInventory_Model_Stock_Item */
$stockItem = $product->getStockItem();
$sku = $product->getSku();
printf("%s - %s\n<hr/>", $stockItem->getQty(), $sku);

// var_dump($product->getData("stock_item"));
// var_dump($product->getData("stock_item"));


// ===========================

//$sku = Mage::getModel('catalog/product')->load( $product->getSku());
//echo $sku->getSku();


 $pid = Mage::getModel('catalog/product')->getCollection()->getFirstItem()->getId();
 $stock = Mage::getModel('cataloginventory/stock_item')->loadByProduct($pid);
 echo $stock->getQty();



 foreach ( Mage::getModel('catalog/product')->getCollection()->addAttributeToSelect("name") as $product) {
     $stock = Mage::getModel('cataloginventory/stock_item')->loadByProduct( $product->getId() );
     echo "product: " . $product->getName() . ", qty=" . $stock->getQty() .  "\n<br/>";
 }