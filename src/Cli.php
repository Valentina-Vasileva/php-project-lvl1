<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

/**
 * Greeting in the game with player's name
 *
 * @return nothing;
 * */
function run()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
