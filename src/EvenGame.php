<?php
namespace BrainGames\EvenGame;

use function cli\line;
use function cli\prompt;

function generateNumbers()
{
    $arr = [];
    for($i = 0; $i < 3; $i++){
        $number = random_int(1,100);
        $arr[] = $number;
    }
    return $arr;
}
function evenNumber($arr)
{
  
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    for($i = 0; $i < count($arr); $i++){
        $answer = prompt("Question: {$arr[$i]}");
        if ($answer !== "yes" && ($arr[$i] % 2 === 0)){
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
