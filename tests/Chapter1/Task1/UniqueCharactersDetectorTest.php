<?php

namespace CrackingCode\Tests\Chapter1\Task1;

use CrackingCode\Chapter1\Task1\CleanUniqueCharactersDetector;
use PHPUnit\Framework\TestCase;

class UniqueCharactersDetectorTest extends TestCase
{
    public function testDetect()
    {
        $detector = new CleanUniqueCharactersDetector();
        $this->assertTrue($detector->detect('qwerty123456'));
        $this->assertFalse($detector->detect('qqwerty6'));
        $this->assertFalse($detector->detect('123  456'));
    }
}
