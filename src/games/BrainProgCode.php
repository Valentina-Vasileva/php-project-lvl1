<?php

/**
 * It's all about one of the brain game where a player has to write a number of arithmetic progression.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainProgCode;

use function BrainGames\Engine\engineBrainGame;
use const BrainGames\Engine\FIRST_GAME;
use const BrainGames\Engine\LAST_GAME;

/**
 * The one of the brain games. The goal is writing a number of arithmetic progression.
 *
 * @return nothing
 */
function brainProg()
{
    $instructions = ('What number is missing in the progression?');
    $questionAndAnswer = [];
    for ($gameNumber = FIRST_GAME; $gameNumber <= LAST_GAME; $gameNumber++) {
        $randIndexForQuestion = rand(0, 9);
        $stepForProgression = rand(0, 100);
        $firstOfProgression = rand(0, 100);
        $arithmeticProgression[0] = $firstOfProgression;
        $lastIndexOfProgression = 9;
        for ($index = 1; $index <= $lastIndexOfProgression; $index++) {
            $arithmeticProgression[$index] = $arithmeticProgression[$index - 1] + $stepForProgression;
        }
        $rightAnswer = $arithmeticProgression[$randIndexForQuestion];
        $arithmeticProgression[$randIndexForQuestion] = '..';
        $question = implode(" ", $arithmeticProgression);
        $questionAndAnswer[$question] = $rightAnswer;
    }
    engineBrainGame($questionAndAnswer, $instructions);    
}
