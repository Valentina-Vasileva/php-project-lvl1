<?php

/**
 * It's all about one of the brain game where a player has to write a number of arithmetic progression.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\Progression;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\LAST_GAME;

function getProgression($firstElement, $step, $lengthOfProgression)
{
    $arithmeticProgression = [];
    for ($index = 0; $index < $lengthOfProgression; $index++) {
        $arithmeticProgression[$index] = $firstElement + $step * $index;
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
    $description = ('What number is missing in the progression?');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        // Get parameters for arithmetic progression
        $firstElement = rand(0, 100);
        $step = rand(0, 100);
        $lengthOfProgression = 10;
        $arithmeticProgression = getProgression($firstElement, $step, $lengthOfProgression);
        // Get progression with a hidden member for a question to player
        $randIndexForQuestion = rand(0, $lengthOfProgression - 1);
        $rightAnswer =  $arithmeticProgression[$randIndexForQuestion];
        $arithmeticProgression[$randIndexForQuestion] = '..';
        $question = implode(" ", $arithmeticProgression);
        $questionAndAnswer[$question] = strval($rightAnswer);
    }
    engine($questionAndAnswer, $description);
}
