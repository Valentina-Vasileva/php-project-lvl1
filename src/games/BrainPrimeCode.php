<?php

/**
 * It's all about one of the brain game where a player has to indicate a prime number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainPrimeCode;

use function BrainGames\Engine\engineBrainGame;

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
    $instructions = ('Answer "yes" if given number is prime. Otherwise answer "no".');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        $question = rand(0, 1000);
        $maxDevider = sqrt($question);
        if (isPrime($question)) {
            $rightAnswer = "yes";
        } else {
            $rightAnswer = "no";
        }
        $questionAndAnswer[$question] = $rightAnswer;
    }
    engineBrainGame($questionAndAnswer, $instructions);
}
