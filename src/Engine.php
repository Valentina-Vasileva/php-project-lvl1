<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const LAST_GAME = 3;

/**
 * Welcome part of brain games.
 *
 * @return nothing
 */
function welcomeToTheBrainGame()
{
    line();
    line('Welcome to the Brain Game!');
}

/**
 * Shows instructions of a brain game.
 *
 * @param $instructions Instructions of a brain game
 *
 * @return nothing
 */
function showInstructions($instructions)
{
    line('%s', $instructions);
    line();
}

/**
 * Gets the name of player and greets.
 *
 * @return $name Name of player
 */
function getNameOfPlayerAndHello()
{
    $name = prompt('May I have your name?', false, '');
    line("Hello, %s!", $name);
    line();
    return $name;
}

/**
 * The engine of brain games.
 *
 * @param $questionAndAnswer Array of questions to player and right answers $instructions Instructions for a brain game
 *
 * @return nothing
 * */
function engineBrainGame(array $questionAndAnswer, string $instructions)
{
    welcomeToTheBrainGame();
    showInstructions($instructions);
    $name = getNameOfPlayerAndHello();
    foreach ($questionAndAnswer as $question => $rightAnswer) {
        line('Question: %s', $question);
        $answer = prompt('Your answer');
        if ($answer !== $rightAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
