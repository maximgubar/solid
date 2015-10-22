<?php
/**
 * SOLID
 *
 * L - Liskov Substitution Principle, LSP
 */

class Bird
{
    public function fly()
    {
        $speed = 10;
        return $speed;
    }
}

/**
 * Class Duck
 *
 * - doesn't change behaviour, extends behaviour instead
 * - follows LSP
 */
class Duck extends Bird
{
    public function fly()
    {
        $speed = 8;
        return $speed;
    }

    public function swim()
    {
        $speed = 2;
        return $speed;
    }
}

/**
 * Class Penguin
 *
 * - changes behaviour
 * - violates LSP
 */
class Penguin extends Bird
{
    public function fly()
    {
        //die('i can`t fly :(');
        return 'i can`t fly :(';
    }

    public function swim()
    {
        $speed = 4;
        return $speed;
    }
}
