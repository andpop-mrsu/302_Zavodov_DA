<?php
namespace Zavodovda\Task04;

function runTest()
{
    echo checkIfBalanced('ab[(cd{})])'), checkIfBalanced('(ab[cd{})'), checkIfBalanced('(ab[cd{]})'). "<br>";
    $stack = new Stack('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
    echo $stack->__toString(), PHP_EOL, $stack->top(), PHP_EOL, $stack->__toString(), PHP_EOL, $stack->pop(), PHP_EOL, $stack->__toString(), PHP_EOL;
    $stack2 = $stack->copy();
    $stack2->push(1, 2, 3);
    echo $stack->__toString(), PHP_EOL, $stack2->__toString(), PHP_EOL;
}