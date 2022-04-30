<?php
namespace Zavodovda\Task04;

function checkIfBalanced($expression)
{
    $stack = new Stack();
    for ($i = 0, $Bracket = ''; $i < strlen($expression);)
    {
        $Char = $expression[$i++];
        switch($Char)
        {
            case '<':
                $Bracket = '>';
                $stack->push('<');
                break;
            case '{':
                $Bracket = '}';
                $stack->push('{');
                break;
            case '(':
                $Bracket = ')';
                $stack->push('(');
                break;
            case '[':
                $Bracket = ']';
                $stack->push('[');
                break;
        }
        if ($Char == $Bracket)
        {
            $stack->pop();
            switch($stack->top())
            {
                case '<':
                    $Bracket = '>';
                    break;
                case '{':
                    $Bracket = '}';
                    break;
                case '(':
                    $Bracket = ')';
                    break;
                case '[':
                    $Bracket = ']';
                    break;
            }
        }
    } 
    return ($stack->isEmpty() ? 'Скобки сбалансированы' : 'Скобки не сбалансированы' ) . PHP_EOL;
}