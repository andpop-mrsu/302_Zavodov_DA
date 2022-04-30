<?php
namespace Zavodovda\Task04;

interface StackInterface
{
    public function push(...$Array);
    public function pop();
    public function top();
    public function isEmpty();
    public function copy();
    public function __toString();
}