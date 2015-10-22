<?php
/**
 * SOLID
 *
 * O - Open/Closed Principle, OCP
 */

class Product
{
    protected $logger;

    public function __construct(FileLogger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        try {
            // save price
        } catch (Exception $e) {
            $this->logger->log($e->getMessage());
        }
    }
}
