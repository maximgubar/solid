<?php
/**
 * SOLID
 *
 * L - Liskov Substitution Principle, LSP
 */

class BirdRun
{
    /**
     * @var Bird
     */
    protected $bird;

    /**
     * @param Bird $bird
     */
    public function __construct(Bird $bird)
    {
        $this->bird = $bird;
    }

    public function run()
    {
        $flySpeed = $this->bird->fly();
        // ...
    }
}
