<?php

namespace BrainGames\PrimeGame;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\generate;
use function BrainGames\Engine\greeting;

function isPrime($number)
{
    $coin = 0;
    for ($j = $number; $j > 0; $j--) {
        if ($number % $j === 0) {
            $coin += 1;
        }
    }
    $result = $coin == 2;
    return $result;
}

function primeNumber()
{
    $arrNumbers = generate(3, 1, 100);
    $name = greeting();
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    for ($i = 0; $i < count($arrNumbers); $i++) {
        $result = isPrime($arrNumbers[$i]) ? 'yes' : 'no';
        line("Question: {$arrNumbers[$i]}");
        $answer = prompt("Your answer");
        if ($answer !== $result) {
            return line("'{$answer}' is wrong answer ;(. Correct answer was '{$result}'.\n
            Let's try again, {$name}!");
        }
        line("Correct!");
    }
    line("Congratulations, {$name}!");
}
