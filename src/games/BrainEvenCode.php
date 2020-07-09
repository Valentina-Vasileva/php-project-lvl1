<?php

/**
 * It's all about one of the brain game where a player has to indicate an even number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainEvenCode;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\LAST_GAME;

/**
 * The one of the brain games. The goal is indicating an even number.
 *
 * @return nothing
 */
function brainEven()
{
    $description = ('Answer "yes" if the number is even, otherwise answer "no".');
    $questionAndAnswer = [];
    for ($gameNumber = 0; $gameNumber < LAST_GAME; $gameNumber++) {
        $question = rand();
        $question % 2 === 0 ? $rightAnswer = 'yes' : $rightAnswer = 'no';
        $questionAndAnswer[$question] = $rightAnswer;
    }
    engine($questionAndAnswer, $description);
}
