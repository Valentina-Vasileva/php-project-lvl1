<?php

/**
 * It's all about one of brain game where a player has to add, subtract and multiply numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\BraiCalCode;

use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;
use function BrainGames\Engine\congrats;

/**
 * Instructions for brain-calc.
 *
 * @return nothing
 */
function helloBrainCalc()
{
    helloBrainGame('What is the result of the expression?');
}

/**
 * The one of brain games. The goal is telling an answer of expression.
 *
 * @param string $name Name of player
 *
 * @return nothing
 */
function brainCalc($name)
{
    for ($index = firstGame(), $lastGame = lastGame(); $index <= $lastGame; $index++) {
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
        $result = engineBrainGame($name, $question, $rightAnswer);
        if ($result === false) {
            break;
        }
        if ($index === $lastGame) {
            congrats($name);
        }
    }
}
