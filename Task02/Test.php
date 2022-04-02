<?php

function runTest() 
{
    // String representation test
    $m1 = new Fraction(4, 8);
    echo "Ожидается: 1/2" . PHP_EOL;
    echo "Получено: " . $m1 . PHP_EOL;

    // Adding test
    $m2 = new Fraction(1, 4);
    $m3 = $m1->add($m2);
    echo "Ожидается: 3/4" . PHP_EOL;
    echo "Получено: " . $m3 . PHP_EOL;

    // Subtraction test
    $m4 = new Fraction(-5, 2);
    $m5 = $m4->sub($m2);
    echo "Ожидается: -2'3/4" . PHP_EOL;
    echo "Получено: " . $m5 . PHP_EOL;
    
    $m6 = new Fraction(5, 8);
    $m7 = $m6->add($m4);
    echo "Ожидается: -2'1/8" . PHP_EOL;
    echo "Получено: " . $m7 . PHP_EOL;

    $m8 = new Fraction(-2, 8);
    $m9 = $m6->sub($m8);
    echo "Ожидается: -1'7/8" . PHP_EOL;
    echo "Получено: " . $m9 . PHP_EOL;
}