<?php

namespace BrainGames\CalcGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\generate;
use function BrainGames\Engine\greeting;

function calculate()
{
    $arr = generate(6, 1, 20);
    $arrOperations = ['+', '-', '*'];
    $name = greeting();
    line("What is the result of the expression?");
    for ($i = 0; $i <= 2; $i++) {
        $number = random_int(0, 2);
        $mathExpression = $arr[$i] . ' ' . $arrOperations[$number] . ' ' . $arr[$i + 1];
        line("Question: {$mathExpression}");
        $answer = prompt("Your answer");
        if ($arrOperations[$number] === '+') {
            $result = $arr[$i] + $arr[$i + 1];
            if ((int) $answer === $result) {
                line("Correct!");
            } else {
                return line("{$answer} is wrong answer ;(. Correct answer was {$result}.\nLet's try again, {$name}!");
            }
        } elseif ($arrOperations[$number] === '-') {
            $result = $arr[$i] - $arr[$i + 1];
            if ((int) $answer === $result) {
                line("Correct!");
            } else {
                return line("{$answer} is wrong answer ;(. Correct answer was {$result}.\n
                Let's try again, {$name}!");
            }
        } elseif ($arrOperations[$number] === '*') {
            $result = $arr[$i] * $arr[$i + 1];
            if ((int) $answer === $result) {
                line("Correct!");
            } else {
                return line("{$answer} is wrong answer ;(. Correct answer was {$result}.\n
                Let's try again, {$name}!");
            }
        }
    }
    line("Congratulations, {$name}!");
}
