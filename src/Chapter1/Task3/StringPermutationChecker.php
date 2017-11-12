<?php

namespace CrackingCode\Chapter1\Task3;

class StringPermutationChecker
{
    public function areStringsPermutation(string $string, string $string2): bool
    {
        if (strlen($string) !== strlen($string2)) {
            return false;
        }
        if ($this->splitAndSortString($string) !== $this->splitAndSortString($string2)) {
            return false;
        };

        return true;
    }

    private function splitAndSortString(string $string): array
    {
        $splitted = str_split($string);
        sort($splitted);

        return $splitted;
    }
}