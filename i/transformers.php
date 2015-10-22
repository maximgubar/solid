<?php
/**
 * SOLID
 *
 * I - Interface Segregation Principle, ISP
 */

class SuperTransformer implements SuperTransformerInterface
{
    public function toCar()
    {
        echo 'transformed to car';
    }

    public function toPlane()
    {
        echo 'transformed to plane';
    }

    public function toShip()
    {
        echo 'transformed to ship';
    }
}

class CarTransformer implements SuperTransformerInterface
{
    public function toCar()
    {
        echo 'transformed to car';
    }

    public function toPlane()
    {
        throw new Exception('can`t transform to plane');
    }

    public function toShip()
    {
        throw new Exception('can`t transform to ship');
    }
}
