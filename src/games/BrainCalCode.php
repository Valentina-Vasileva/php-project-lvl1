<?php

/**
 * It's all about one of the brain game where a player has to add, subtract and multiply numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainCalCode;

use function BrainGames\Engine\run;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;

/**
 * The one of the brain games. The goal is telling an answer of expression.
 * 
 * @return nothing
 */
function brainCalc()
{
    helloBrainGame('What is the result of the expression?');
    $name = run();
    for ($gameNumber = firstGame(), $lastGame = lastGame(); $gameNumber <= $lastGame; $gameNumber++) {
        $choise = rand(1, 3);
        $rand1 = rand(-100, 100);
        $rand2 = rand(-100, 100);
        if ($choise === 1) {
            $question = $rand1 . ' + ' . $rand2;
            $rightAnswer = $rand1 + $rand2;
        } elseif ($choise === 2) {
            $question = $rand1 . ' - ' . $rand2;
            $rightAnswer = $rand1 - $rand2;
        } elseif ($choise === 3) {
            $question = $rand1 . ' * ' . $rand2;
            $rightAnswer = $rand1 * $rand2;
        }
        $result = engineBrainGame($name, $question, $rightAnswer, $gameNumber);
        if ($result === false) {
            break;
        }
    }
}
