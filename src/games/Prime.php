<?php

/**
 * It's all about one of the brain game where a player has to indicate a prime number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\Prime;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\LAST_GAME;

/**
 * This function answers the question if a number is prime or not.
 *
 * @param int $number Random integer
 *
 * @return "yes" or "no"
 */
function isPrime($number)
{
    if ($number < 2) {
        return false;
    }
    for ($devider = 2, $maxDevider = sqrt($number); $devider <= $maxDevider; $devider++) {
        if ($number % $devider === 0) {
            return false;
        }
    }
    return true;
}

/**
 * The one of the brain games. The goal is indicating a prime number.
 *
 * @return nothing
 */
function brainPrime()
{
    $description = ('Answer "yes" if given number is prime. Otherwise answer "no".');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        $question = rand(0, 1000);
        $maxDevider = sqrt($question);
        isPrime($question) ? $rightAnswer = "yes" : $rightAnswer = "no";
        $questionAndAnswer[$question] = $rightAnswer;
    }
    engine($questionAndAnswer, $description);
}
