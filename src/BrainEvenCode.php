<?php

/**
 * It's all about one of brain game where a player has to indicate an even numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\BrainEvenCode;

use function cli\line;
use function cli\prompt;

/**
 * Greetings of the Even Game.
 *
 * @return nothing
 * */
function helloBrainEven()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
}

/**
 * The one of brain games. The goal is indicating an even number for three times.
 *
 * @param string $name Name of player
 *
 * @return nothing
 * */
function brainEven($name)
{
    for ($index = 0; $index <= 2; $index++) {
        $number = rand();
        line('Question: %d', $number);
        $answer = prompt('Your answer');
        if ($number % 2 === 0 && $answer === 'yes') {
            line('Correct!');
            if ($index === 2) {
                line("Congratulations, %s!", $name);
            }
        } elseif ($number % 2 === 0 && $answer !== 'yes') {
            line("'%s' is wrong answer ;(. Correct answer was 'yes'.", $answer);
            line("Let's try again, %s!", $name);
            break;
        } elseif ($number % 2 !== 0 && $answer === 'no') {
            line('Correct!');
            if ($index === 2) {
                line("Congratulations, %s!", $name);
            }
        } elseif ($number % 2 !== 0 && $answer !== 'no') {
            line("'%s' is wrong answer ;(. Correct answer was 'no'.", $answer);
            line("Let's try again, %s!", $name);
            break;
        }
    }
}
