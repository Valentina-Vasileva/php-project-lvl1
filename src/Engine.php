<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const FIRST_GAME = 1;
const LAST_GAME = 3;

function helloBrainGame($instructions)
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
 * Allows to add instructions of game.
 *
 * @param $name Name of player $question Question to player $rightAnswer Right answer for question
 *
 * @return false
 * */
function engineBrainGame($questionAndAnswer, $instructions)
{
    $name = helloBrainGame($instructions);
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
