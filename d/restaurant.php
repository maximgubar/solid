<?php
/**
 * SOLID
 *
 * D - Dependency Inversion Principle, DIP
 */

class Restaurant implements FoodProviderInterface
{
    public function getFood()
    {
        // ...

        return $food;
    }
}
