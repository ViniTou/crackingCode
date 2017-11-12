<?php

namespace CrackingCode\Chapter1\Task1;

class CleanUniqueCharactersDetector
{
    public function detect(string $stringToTest): bool
    {
        return strlen(count_chars($stringToTest, 3)) === strlen($stringToTest);
    }
}