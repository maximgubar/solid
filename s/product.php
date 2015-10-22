<?php
/**
 * SOLID
 *
 * S - Single Responsibility Principle, SRP
 */

class Product
{
    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        try {
            // save price
        } catch (Exception $e) {
            $this->log($e->getMessage());
        }
    }

    public function log($message)
    {
        // log message to storage
    }
}
