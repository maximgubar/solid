<?php
/**
 * SOLID
 *
 * S - Single Responsibility Principle, SRP
 */

class Logger
{
    public function log($message)
    {
        // ...
        $this->saveToFile($message);
    }
}
