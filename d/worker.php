<?php
/**
 * SOLID
 *
 * D - Dependency Inversion Principle, DIP
 */

class lowRatedWorker
{
    public function eat()
    {
        $cantine = new Cantine;
        $food = $cantine->getFood();
        // ... eat
    }
}

class averageRatedWorker
{
    /**
     * @var Cantine
     */
    protected $cantine;

    /**
     * @param Cantine $cantine
     */
    public function __construct(Cantine $cantine)
    {
        $this->cantine = $cantine;
    }

    public function eat()
    {
        $food = $this->cantine->getFood();
        // ... eat
    }

}

class highRatedWorker
{
    /**
     * @var FoodProviderInterface
     */
    protected $foodProvider;

    /**
     * @param FoodProviderInterface $foodProvider
     */
    public function __construct(FoodProviderInterface $foodProvider)
    {
        $this->foodProvider = $foodProvider;
    }

    public function eat()
    {
        $food = $this->foodProvider->getFood();
        // ... eat
    }
}
