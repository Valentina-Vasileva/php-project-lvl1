<?php

/**
 * It's all about one of the brain game where a player has to indicate an even number.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\games\BrainEvenCode;

use function BrainGames\Engine\engineBrainGame;
use function BrainGames\Engine\helloBrainGame;
use function BrainGames\Engine\lastGame;
use function BrainGames\Engine\firstGame;
use function BrainGames\Engine\congrats;

/**
 * Instructions for brain-even.
 *
 * @return nothing
 */
function helloBrainEven()
{
    helloBrainGame('Answer "yes" if the number is even, otherwise answer "no".');
}

/**
 * The one of the brain games. The goal is indicating an even number for three times.
 *
 * @param string $name Name of player
 *
 * @return nothing
 */
function brainEven($name)
{
    for ($index = firstGame(), $lastGame = lastGame(); $index <= $lastGame; $index++) {
        $question = rand();
        if ($question % 2 === 0) {
            $rightAnswer = 'yes';
        } else {
            $rightAnswer = 'no';
        }
        $result = engineBrainGame($name, $question, $rightAnswer);
        if ($result === false) {
            break;
        }
        if ($index === $lastGame) {
            congrats($name);
        }
    }
}
