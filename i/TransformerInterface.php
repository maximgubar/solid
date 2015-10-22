<?php
/**
 * SOLID
 *
 * I - Interface Segregation Principle, ISP
 */

interface SuperTransformerInterface
{
    public function toCar();
    public function toPlane();
    public function toShip();
}
