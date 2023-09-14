<?php
namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function generate($count, $min, $max)
{
    $arrNumbers = [];
    for($i = 0; $i < $count; $i++){
        $number = random_int($min,$max);
        $arrNumbers[] = $number;
    }
    return $arrNumbers;
}
function greeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}