<?php

/**
 * It's all about one of brain game where a player has to indicate a prime number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\BrainPrimeCode;

use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;
use function BrainGames\Engine\congrats;

/**
 * Instructions for brain-progression.
 *
 * @return nothing
 */
function helloBrainPrime()
{
    helloBrainGame('Answer "yes" if given number is prime. Otherwise answer "no".');
}

/**
 * The one of brain games. The goal is indicating a prime number.
 *
 * @param string $name Name of player
 *
 * @return nothing
 */
function brainPrime($name)
{
    for ($index = firstGame(), $lastGame = lastGame(); $index <= $lastGame; $index++) {
        $question = rand(0, 1000);
        $maxDevider = sqrt($question);
        for ($devider = 2; $devider <= $maxDevider; $devider++) {
            if ($question % $devider === 0) {
                $rightAnswer = "yes";
            } else {
                $rightAnswer = "no";
            }
        }
        $result = engineBrainGame($name, $question, $rightAnswer);
        if ($result === false) {
            break;
        }
        if ($index === $lastGame) {
            congrats($name);
        }
    }
}
