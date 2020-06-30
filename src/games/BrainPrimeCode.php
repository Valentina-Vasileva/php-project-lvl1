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
        $rightAnswer = '';
        for ($devider = 2; $devider <= $maxDevider; $devider++) {
            if ($question % $devider === 0) {
                $rightAnswer = "no";
                break;
            } else {
                $rightAnswer = "yes";
            }
        }
        $result = engineBrainGame($name, $question, $rightAnswer, $gameNumber);
        if ($result === false) {
            break;
        }
    }
}
