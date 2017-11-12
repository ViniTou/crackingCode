<?php

namespace CrackingCode\Tests\Chapter1\Task3;

use CrackingCode\Chapter1\Task3\StringPermutationChecker;
use PHPUnit\Framework\TestCase;

class StringPermutationCheckerTest extends TestCase
{
    public function testAreStringsPermutation()
    {
        $checker = new StringPermutationChecker();
        $this->assertTrue($checker->areStringsPermutation('123', '321'));
        $this->assertTrue($checker->areStringsPermutation('abcggd', 'gcbadg'));
        $this->assertTrue($checker->areStringsPermutation('12 3a', 'a32 1'));
        $this->assertFalse($checker->areStringsPermutation('123', '12345'));
        $this->assertFalse($checker->areStringsPermutation('qwerty', 'asdfghddd'));
        $this->assertFalse($checker->areStringsPermutation('abc', 'asd'));
    }
}
