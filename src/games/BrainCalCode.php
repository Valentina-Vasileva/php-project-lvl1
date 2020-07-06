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
        $rand1 = rand(-100, 100);
        $rand2 = rand(-100, 100);
        $operators = ['+','-','*'];
        $keyOfRandomOperator = array_rand($operators, 1);
        $operatorForThisCase = $operators[$keyOfRandomOperator];
        switch ($operatorForThisCase) {
            case '+':
                $rightAnswer = $rand1 + $rand2;
                break;
            case '-':
                $rightAnswer = $rand1 - $rand2;
                break;
            case '*':
                $rightAnswer = $rand1 * $rand2;
                break;
        }
        $question = "{$rand1} {$operatorForThisCase} {$rand2}";
        $questionAndAnswer[$question] = strval($rightAnswer);
    }
    engineBrainGame($questionAndAnswer, $instructions);
}
