<?php

namespace CrackingCode\Tests\Chapter1\Task4;

use CrackingCode\Chapter1\Task4\SpaceReplacer;
use PHPUnit\Framework\TestCase;

class SpaceReplacerTest extends TestCase
{
    public function testReplace()
    {
        $entry = 'qwe qweasd zxcasd       ';
        $expected = 'qwe%20qweasd%20zxcasd';
        $trueLength = 17;

        $replacer = new SpaceReplacer();

        $this->assertSame($expected, $replacer->replace($entry, $trueLength));
    }

    public function testNoSpaceReplace()
    {
        $entry = 'qweasd';
        $expected = 'qweasd';
        $trueLength = 6;

        $replacer = new SpaceReplacer();

        $this->assertSame($expected, $replacer->replace($entry, $trueLength));
    }

    public function testAllSpaceReplace()
    {
        $entry = '    ';
        $expected = '%20%20';
        $trueLength = 2;

        $replacer = new SpaceReplacer();

        $this->assertSame($expected, $replacer->replace($entry, $trueLength));
    }
}