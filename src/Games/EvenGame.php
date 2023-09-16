<?php

namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\generate;
use function BrainGames\Engine\greeting;

function evenNumber()
{
    $arr = generate(3, 1, 50);
    $name = greeting();
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    for ($i = 0; $i < count($arr); $i++) {
        line("Question: {$arr[$i]}");
        $answer = prompt("Your answer");
        if ($answer !== "yes" && ($arr[$i] % 2 === 0)) {
            return line("'{$answer}' is wrong answer ;(. Correct answer was 'yes'.\n
            Let's try again, {$name}!");
        } elseif ($answer !== "no" && ($arr[$i] % 2 !== 0)) {
            return line("'{$answer}' is wrong answer ;(. Correct answer was 'no'.\n
            Let's try again, {$name}!");
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
