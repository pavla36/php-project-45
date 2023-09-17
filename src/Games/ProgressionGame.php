<?php

namespace BrainGames\ProgressionGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\generate;
use function BrainGames\Engine\greeting;

function generateProgression(int $startNumber, int $progressionNumber, int $lengthProgression)
{
    $arr = [];
    for ($j = $startNumber; count($arr) <= $lengthProgression; $j += $progressionNumber) {
        $arr[] = $j;
    }
    return $arr;
}

function progression()
{
    $startNumbers = generate(3, 1, 50);
    $progressionNumber = generate(3, 1, 10);
    $lengthProgression = generate(3, 5, 10);
    $undefinedNumber = generate(3, 1, count($lengthProgression));
    $name = greeting();
    line("What number is missing in the progression?");
    for ($i = 0; $i <= 2; $i++) {
        $arr = generateProgression($startNumbers[$i], $progressionNumber[$i], $lengthProgression[$i]);
        $result = $arr[$undefinedNumber[$i]];
        $arr[$undefinedNumber[$i]] = '..';
        $lineNumbers = implode(' ', $arr);
        line("Question: {$lineNumbers}");
        $answer = prompt("Your answer");
        if ((int) $answer !== $result) {
            return line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.\n
            Let's try again, {$name}!");
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
