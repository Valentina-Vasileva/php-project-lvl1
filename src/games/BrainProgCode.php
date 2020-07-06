<?php

/**
 * It's all about one of the brain game where a player has to write a number of arithmetic progression.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainProgCode;

use function BrainGames\Engine\engineBrainGame;

use const BrainGames\Engine\LAST_GAME;

function getProgression($firstOfProgression, $stepForProgression, $lastIndexOfProgression)
{
    $arithmeticProgression = [];
    for ($index = 0; $index <= $lastIndexOfProgression; $index++) {
        $arithmeticProgression[$index] = $firstOfProgression + $stepForProgression * $index;
    }
    return $arithmeticProgression;
}


/**
 * The one of the brain games. The goal is writing a number of arithmetic progression.
 *
 * @return nothing
 */
function brainProg()
{
    $instructions = ('What number is missing in the progression?');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        // Get parameters for arithmetic progression
        $firstOfProgression = rand(0, 100);
        $stepForProgression = rand(0, 100);
        $lastIndexOfProgression = 9;
        $arithmeticProgression = getProgression($firstOfProgression, $stepForProgression, $lastIndexOfProgression);
        // Get progression with a hidden member for a question to player
        $randIndexForQuestion = rand(0, 9);
        $rightAnswer =  $arithmeticProgression[$randIndexForQuestion];
        $arithmeticProgression[$randIndexForQuestion] = '..';
        $question = implode(" ", $arithmeticProgression);
        $questionAndAnswer[$question] = strval($rightAnswer);
    }
    engineBrainGame($questionAndAnswer, $instructions);
}
