<?php
$installer = $this;
$installer->startSetup();

$installer->run("ALTER TABLE sales_flat_order ADD COLUMN ssn VARCHAR(255);");

$installer->endSetup();