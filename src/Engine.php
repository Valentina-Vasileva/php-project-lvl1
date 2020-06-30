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
    line();
    line('Welcome to the Brain Game!');
    line('%s', $instructions);
    line();
}

/**
 * Greeting in the game with player's name.
 *
 * @return $name
 * */
function run()
{
    $name = prompt('May I have your name?', false, '');
    line("Hello, %s!", $name);
    line();
    return $name;
}

/**
 * Allows to add instructions of game.
 *
 * @param $name Name of player $question Question to player $rightAnswer Right answer for question
 *
 * @return false
 * */
function engineBrainGame($name, $question, $rightAnswer, $gameNumber)
{
    $lastGame = lastGame();
    line('Question: %s', $question);
    $answer = strval(prompt('Your answer'));
    if ($answer === strval($rightAnswer)) {
        line('Correct!');
        if ($gameNumber === $lastGame) {
            line("Congratulations, %s!", $name);
        }
    } else {
        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
        line("Let's try again, %s!", $name);
        return false;
    }
}

/**
 * Shows a number of the last game's round.
 *
 * @return 3;
 */
function lastGame()
{
    return 3;
}

/**
 * Shows a number of the first game's round.
 *
 * @return 3;
 */
function firstGame()
{
    return 1;
}
