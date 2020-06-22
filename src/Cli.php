<?php

/**
 * String functions for brain games.
 *
 * @author valentina-vasileva <valentina.vasileva@yandex.ru>
 */

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Greeting in the game with player's name
 *
 * @return $name
 * */
function run()
{
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
