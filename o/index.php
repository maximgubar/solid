<?php
/**
 * SOLID
 *
 * O - Open/Closed Principle, OCP
 */

$logger = new FileLogger();
$product = new Product($logger);
$product->setPrice(10);
