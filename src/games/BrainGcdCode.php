<?php

/**
 * It's all about one of the brain game where a player has to write a gcd of two numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainGcdCode;

use function BrainGames\Engine\run;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;

/**
 * The one of the brain games. The goal is writing a gcd of two numbers.
 * 
 * @return nothing
 */
function brainGcd()
{
    helloBrainGame('Find the greatest common divisor of given numbers.');
    $name = run();
    for ($gameNumber = firstGame(), $lastGame = lastGame(); $gameNumber <= $lastGame; $gameNumber++) {
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
        $result = engineBrainGame($name, $question, $rightAnswer, $gameNumber);
        if ($result === false) {
            break;
        }
    }
}
