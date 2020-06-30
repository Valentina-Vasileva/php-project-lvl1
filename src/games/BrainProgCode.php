<?php

/**
 * It's all about one of the brain game where a player has to write a number of arithmetic progression.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainProgCode;

use function BrainGames\Engine\run;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;

/**
 * The one of the brain games. The goal is writing a number of arithmetic progression.
 *
 * @return nothing
 */
function brainProg()
{
    helloBrainGame('What number is missing in the progression?');
    $name = run();
    for ($gameNumber = firstGame(), $lastGame = lastGame(); $gameNumber <= $lastGame; $gameNumber++) {
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
        $result = engineBrainGame($name, $question, $rightAnswer, $gameNumber);
        if ($result === false) {
            break;
        }
    }
}
