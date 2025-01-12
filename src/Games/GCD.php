<?php

namespace Php\Project\Games\Gcd;

use const Php\Project\GameEngine\ROUNDS_COUNT;
use const Php\Project\GameEngine\MIN_NUMBER;
use const Php\Project\GameEngine\MAX_NUMBER;

function gcd($a, $b)
{
    return ($a % $b) ? gcd($b, $a % $b) : $b;
}

function gameGcd()
{
    $gameRules = "Find the greatest common divisor of given numbers.\n";
    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = rand(MIN_NUMBER, MAX_NUMBER);
        $secondNumber = rand(MIN_NUMBER, MAX_NUMBER);

        $question = "{$firstNumber} {$secondNumber}";
        $correctAnswer = gcd($firstNumber, $secondNumber);

        $gameData [] = [
            'question' => $question,
            'correctAnswer' => $correctAnswer];
    }

    return [$gameRules, $gameData];
}