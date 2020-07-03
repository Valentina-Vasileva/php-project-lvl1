<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const FIRST_GAME = 1;
const LAST_GAME = 3;

/**
 * Hello part of brain games.
 *
 * @param $$instructions Instructions for a brain game
 *
 * @return $name Name of player
 */
function hello($instructions)
{
    line();
    line('Welcome to the Brain Game!');
    line('%s', $instructions);
    line();
    $name = prompt('May I have your name?', false, '');
    line("Hello, %s!", $name);
    line();
    return $name;
}

/**
 * Engine of brain games.
 *
 * @param $questionAndAnswer Array of questions to player and right answers $instructions Instructions for a brain game
 *
 * @return nothing
 * */
function engineBrainGame($questionAndAnswer, $instructions)
{
    $name = hello($instructions);
    $gameNumber = 0;
    foreach ($questionAndAnswer as $question => $rightAnswer) {
        $gameNumber++;
        line('Question: %s', $question);
        $answer = strval(prompt('Your answer'));
        if ($answer === strval($rightAnswer)) {
            line('Correct!');
            if ($gameNumber === LAST_GAME) {
                    line("Congratulations, %s!", $name);
            }
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
