<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

/**
 * Allows to add instructions of game.
 *
 * @param string $instructions Instructions of game.
 * 
 * @return $name
 * */
function helloBrainGame($instructions)
{
    line('Welcome to the Brain Game!');
    line('%s', $instructions);
}

/**
 * Greeting in the game with player's name.
 *
 * @return $name
 * */
function run()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

/**
 * Allows to add instructions of game.
 * 
 * @param $name Name of player $question Question to player $rightAnswer Right answer for question
 * 
 * @return false
 * */
function engineBrainGame($name, $question, $rightAnswer)
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


