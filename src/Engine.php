<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function helloBrainGame($instructions)
{
    line('Welcome to the Brain Game!');
    line('%s', $instructions);
}

function EngineBrainGame($name, $question, $rightAnswer)
{
    line('Question: %s', $question);
    $answer = prompt('Your answer');
    if ($answer === $rightAnswer) {
        line('Correct!');
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
        line("Let's try again, %s!", $name);
        return false;
    } 
}


