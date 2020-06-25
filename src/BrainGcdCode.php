<?php

/**
 * It's all about one of brain game where a player has to write a gcd of two numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\BrainGcdCode;

use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;
use function BrainGames\Engine\congrats;

/**
 * Instructions for brain-gcd.
 *
 * @return nothing
 */
function helloBrainGcd()
{
    helloBrainGame('Find the greatest common divisor of given numbers.');
}

/**
 * The one of brain games. The goal is writing a gcd of two numbers.
 *
 * @param string $name Name of player
 *
 * @return nothing
 */
function brainGcd($name)
{
    for ($index = firstGame(), $lastGame = lastGame(); $index <= $lastGame; $index++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $question = $rand1 . ' ' . $rand2;
        while ($rand1 !== 0 && $rand2 !== 0) {
            if ($rand1 > $rand2) {
                $rand1 = $rand1 % $rand2;
            } else {
                $rand2 = $rand2 % $rand1;
            }
        }
        $rightAnswer = $rand1 + $rand2;
        $result = engineBrainGame($name, $question, $rightAnswer);
        if ($result === false) {
            break;
        }
        if ($index === $lastGame) {
            congrats($name);
        }
    }
}
