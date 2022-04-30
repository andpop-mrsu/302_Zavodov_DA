<?php
namespace Zavodovda\Task04;

class Stack implements StackInterface
{
    private $Array_Stack = array();
    private $Count_Stack = 0;

    function __construct(...$Array)
    {
        $this->push(...$Array);
    }

    public function push(...$Array)
    {
        foreach ($Array as $Element)
            $this->Array_Stack[$this->Count_Stack++] = $Element;
    }

    public function pop()
    {
        $Element = $this->top();
        if (!$Element)
            return null;
        $this->Array_Stack[--$this->Count_Stack] = false;
        return $Element;
    }

    public function top()
    {
        return ($this->isEmpty() ? false : $this->Array_Stack[$this->Count_Stack - 1] );
    }
    
    public function isEmpty()
    {
        return (($this->Count_Stack > 0) ? false : true);
    }

    public function copy()
    {
        $New_Stack = new Stack();
        $New_Stack->push(...$this->Array_Stack);
        return $New_Stack;
    }

    public function __toString()
    {
        return $this->Cout_Array($this->Count_Stack - 1);
    }

    private function Cout_Array($Index)
    {
        if ($Index < 0)
            return 'Стек пуст' . PHP_EOL;
        if (!$Index)
            return $this->Array_Stack[$Index--];
        return $this->Array_Stack[$Index--] . '->' . $this->Cout_Array($Index);

    }
}