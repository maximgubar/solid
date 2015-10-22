<?php
/**
 * SOLID
 *
 * L - Liskov Substitution Principle, LSP
 */

$bird = new Bird();
//$bird = new Duck();
//$bird = new Penguin();

$birdRun = new BirdRun($bird);
$birdRun->run();
