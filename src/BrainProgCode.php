<?php

/**
 * It's all about one of brain game where a player has to write a number of arithmetic progression.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\BrainProgCode;

use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;
use function BrainGames\Engine\congrats;

/**
 * Instructions for brain-progression.
 *
 * @return nothing
 */
function helloBrainProg()
{
    helloBrainGame('What number is missing in the progression?');
}

/**
 * The one of brain games. The goal is writing a number of arithmetic progression.
 *
 * @param string $name Name of player
 *
 * @return nothing
 */
function brainProg($name)
{
    for ($index = firstGame(), $lastGame = lastGame(); $index <= $lastGame; $index++) {
        $randIndexForQuestion = rand(0, 9);
        $stepForProgression = rand(0, 100);
        $firstOfProgression = rand(0, 100);
        $arithmeticProgression[0] = $firstOfProgression;
        for ($ind = 1; $ind <= 9; $ind++) {
            $arithmeticProgression[$ind] = $arithmeticProgression[$ind - 1] + $stepForProgression;
        }
        $rightAnswer = $arithmeticProgression[$randIndexForQuestion];
        $arithmeticProgression[$randIndexForQuestion] = '..';
        $question = implode(" ", $arithmeticProgression);
        $result = engineBrainGame($name, $question, $rightAnswer);
        if ($result === false) {
            break;
        }
        if ($index === $lastGame) {
            congrats($name);
        }
    }
}
