<?php

namespace BrainGames\GcdGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\generate;
use function BrainGames\Engine\greeting;

function gcd()
{
    $arrNumbers = generate(3, 1, 100);
    $arrNumbers2 = generate(3, 1, 100);
    // $arrNumbers = [5,10,50];
    // $arrNumbers2= [10,15,100];
    var_dump(count($arrNumbers), count($arrNumbers2));
    $name = greeting();
    for ($i = 0; $i < count($arrNumbers); $i++) {
        $min = min($arrNumbers[$i], $arrNumbers2[$i]);
        for ($j = $min; $j > 0; $j--) {
            if ($arrNumbers[$i] % $j === 0 && $arrNumbers2[$i] % $j === 0) {
                $result = $j;
                line("Question: {$arrNumbers[$i]} {$arrNumbers2[$i]}");
                $answer = prompt("Your answer");
                if ((int) $answer !== $result) {
                    var_dump($result, $answer);
                    return line("'{$answer}' is wrong answer ;(. Correct answer was {$result}.\n
                    Let's try again, {$name}!");
                }
                line("Correct!");
                break;
            } 
        }
    }
    line("Congratulations, {$name}!");
}
