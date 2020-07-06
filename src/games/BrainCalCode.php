<?php

/**
 * It's all about one of the brain game where a player has to add, subtract and multiply numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainCalCode;

use function BrainGames\Engine\engineBrainGame;

use const BrainGames\Engine\LAST_GAME;

/**
 * The one of the brain games. The goal is telling an answer of expression.
 *
 * @return nothing
 */
function brainCalc()
{
    $instructions = ('What is the result of the expression?');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        $numberOfOperations = 3;
        $choise = rand(1, $numberOfOperations);
        $rand1 = rand(-100, 100);
        $rand2 = rand(-100, 100);
        $operationOfSum = 1;
        $operationOfSubtraction = 2;
        $operationOfMultiplication = 3;
        if ($choise === $operationOfSum) {
            $question = $rand1 . ' + ' . $rand2;
            $rightAnswer = $rand1 + $rand2;
        } elseif ($choise ===  $operationOfSubtraction) {
            $question = $rand1 . ' - ' . $rand2;
            $rightAnswer = $rand1 - $rand2;
        } elseif ($choise === $operationOfMultiplication) {
            $question = $rand1 . ' * ' . $rand2;
            $rightAnswer = $rand1 * $rand2;
        }
        $questionAndAnswer[$question] = strval($rightAnswer);
    }
    engineBrainGame($questionAndAnswer, $instructions);
}
