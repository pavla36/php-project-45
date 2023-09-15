<?php

namespace BrainGames\ProgressionGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\generate;
use function BrainGames\Engine\greeting;

function progression()
{
    $arrStartNumbers = generate(3, 1, 50);
    $undefinedNumer = generate(3, 1, 10);
    $progressionNumber = generate(3, 1, 10);
    $arr = [];
    $name = greeting();
    line("What number is missing in the progression?");
    for ($i = 0; $i <= 2; $i++) {
        for ($j = $arrStartNumbers[$i]; count($arr) <= 10; $j = $j + $progressionNumber[$i]) {
            $arr[] = $j;
        }
        $result = $arr[$undefinedNumer[$i]];
        $arr[$undefinedNumer[$i]] = '..';
        $lineNumbers = implode(' ', $arr);
        line("Question: {$lineNumbers}");
        $answer = prompt("Your answer");
        if ((int) $answer !== $result) {
            return line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.\n
            Let's try again, {$name}!");
        }
        line("Correct!");
        $arr = [];
    }
    line("Congratulations, {$name}!");
}
