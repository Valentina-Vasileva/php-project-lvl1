<?php

/**
 * It's all about one of the brain game where a player has to indicate an even number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainEvenCode;

use function BrainGames\Engine\engineBrainGame;
use const BrainGames\Engine\FIRST_GAME;
use const BrainGames\Engine\LAST_GAME;

/**
 * The one of the brain games. The goal is indicating an even number.
 *
 * @return nothing
 */
function brainEven()
{
    $instructions = ('Answer "yes" if the number is even, otherwise answer "no".');
    $questionAndAnswer = [];
    for ($gameNumber = FIRST_GAME; $gameNumber <= LAST_GAME; $gameNumber++) {
        $question = rand();
        if ($question % 2 === 0) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        $questionAndAnswer[$question] = $rightAnswer;
    }
    engineBrainGame($questionAndAnswer, $instructions);
}
