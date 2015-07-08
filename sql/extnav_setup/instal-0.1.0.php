<?php
$this->startSetup();

$table = $this->getTable('extnav/item');

$this->run("
        DROP TABLE IF EXISTS $table;
        CREATE TABLE $table
        (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `parent_id` int(10) NULL,
        `position` int(10) unsigned NULL,
        `label` varchar (50) NULL,
        `url` varchar (255) NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8
");

//Example data
$this->run("
        INSERT INTO $table (`id`, `parent_id`, `position`, `label`, `url`)
        VALUES
            (1, NULL, 0, 'Connect', NULL),
(2, NULL, 1, 'Info', NULL),
            (3, 1, 0, 'About Us', 'about-magento-demo-store'),
            (4, 1, 1, 'Contact Us', 'contacts'),
            (5, 2, 0, 'Customer Service', 'customer-service'),
            (6, 2, 1, 'Order Information', 'sales/guest/form/')
");

$this->endSetup();


/**
 * Created by PhpStorm.
 * User: user
 * Date: 6/10/15
 * Time: 4:31 AM
 */