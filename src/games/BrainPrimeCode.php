<?php

/**
 * It's all about one of the brain game where a player has to indicate a prime number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainPrimeCode;

use function BrainGames\Engine\run;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;

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
            return "no";
        }
    }
    return "yes";
}

/**
 * The one of the brain games. The goal is indicating a prime number.
 *
 * @return nothing
 */
function brainPrime()
{
    helloBrainGame('Answer "yes" if given number is prime. Otherwise answer "no".');
    $name = run();
    for ($gameNumber = firstGame(), $lastGame = lastGame(); $gameNumber <= $lastGame; $gameNumber++) {
        $question = rand(0, 1000);
        $maxDevider = sqrt($question);
        $rightAnswer = isPrime($question);
        $result = engineBrainGame($name, $question, $rightAnswer, $gameNumber);
        if ($result === false) {
            break;
        }
    }
}
