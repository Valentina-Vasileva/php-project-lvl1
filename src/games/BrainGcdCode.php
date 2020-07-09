<?php

/**
 * It's all about one of the brain game where a player has to write a gcd of two numbers.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainGcdCode;

use function BrainGames\Engine\engineBrainGame;

use const BrainGames\Engine\LAST_GAME;

/**
 * This function calculates a gcd of two numbers.
 *
 * @param $number1 Number $number2 Number
 *
 * @return $number1 + $number2 Gcd of two numbers
 */
function gcd($number1, $number2)
{
    while ($number1 !== 0 && $number2 !== 0) {
        if ($number1 > $number2) {
            $number1 = $number1 % $number2;
        } else {
            $number2 = $number2 % $number1;
        }
    }
    return $number1 + $number2;
}

/**
 * The one of the brain games. The goal is writing a gcd of two numbers.
 *
 * @return nothing
 */
function brainGcd()
{
    $description = ('Find the greatest common divisor of given numbers.');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        $rand1 = rand(0, 100);
        $rand2 = rand(0, 100);
        $question = $rand1 . ' ' . $rand2;
        $rightAnswer = gcd($rand1, $rand2);
        $questionAndAnswer[$question] = strval($rightAnswer);
    }
    engineBrainGame($questionAndAnswer, $description);
}
