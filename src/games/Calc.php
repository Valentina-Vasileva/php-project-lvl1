<?php

/**
 * It's all about one of the brain game where a player has to add, subtract and multiply numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\Calc;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\LAST_GAME;

/**
 * The one of the brain games. The goal is telling an answer of expression.
 *
 * @return nothing
 */
function brainCalc()
{
    $description = ('What is the result of the expression?');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        $rand1 = rand(-100, 100);
        $rand2 = rand(-100, 100);
        $operators = ['+','-','*'];
        $keyOfRandomOperator = array_rand($operators, 1);
        $operator = $operators[$keyOfRandomOperator];
        switch ($operator) {
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
        $question = "{$rand1} {$operator} {$rand2}";
        $questionAndAnswer[$question] = strval($rightAnswer);
    }
    engine($questionAndAnswer, $description);
}
