<?php
/**
 * SOLID
 *
 * O - Open/Closed Principle, OCP
 */

class FileLogger
{
    protected function saveToFile($message)
    {
        // ...
    }

    public function log($message)
    {
        // ...
        $this->saveToFile($message);
    }
}
