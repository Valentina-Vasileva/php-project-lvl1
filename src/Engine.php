<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const LAST_GAME = 3;

/**
 * The engine of brain games.
 *
 * @param $questionAndAnswer Array of questions to player and right answers $instructions Instructions for a brain game
 *
 * @return nothing
 * */
function engine(array $questionAndAnswer, string $description)
{
    line();
    line('Welcome to the Brain Game!');
    line('%s', $description);
    line();
    $name = prompt('May I have your name?', false, '');
    line("Hello, %s!", $name);
    line();
    foreach ($questionAndAnswer as $question => $rightAnswer) {
        line('Question: %s', $question);
        $answer = prompt('Your answer');
        if ($answer !== $rightAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $rightAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
        line('Correct!');
    }
    line("Congratulations, %s!", $name);
}
