<?php

namespace CrackingCode\Chapter1\Task4;

class SpaceReplacer
{
    public function replace(string $entry, int $trueLength): string
    {
        $exitArray = [];
        $newIndex = 0;
        for ($i=0; $i < $trueLength; $i++) {
            if ($entry[$i] === ' ') {
                $exitArray[$newIndex++] = '%';
                $exitArray[$newIndex++] = '2';
                $exitArray[$newIndex++] = '0';
                continue;
            }
            $exitArray[$newIndex++] = $entry[$i];
        }

        return implode('', $exitArray);
    }
}