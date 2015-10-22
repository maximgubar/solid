<?php
/**
 * SOLID
 *
 * D - Dependency Inversion Principle, DIP
 */

class Cantine implements FoodProviderInterface
{
    public function getFood()
    {
        // ...

        return $food;
    }
}
