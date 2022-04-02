<?php

class Fraction {
    private $Numerator, $Denominator;

    function __construct($Numerator, $Denominator) 
    {
        if ($this->isValue($Numerator) and $this->isValue($Denominator) and $Denominator) 
        {
            if ($Denominator < 0)
            {
                $Numerator = -$Numerator;
                $Denominator = -$Denominator; 
            }
            $this->Numerator = $Numerator; 
            $this->Denominator = $Denominator;
            $this->NOD_Values();
        } 
        else
            echo 'error enter values';
    }

    private function isValue($Chars) 
    {
        $Chars .= '';
        $Char = $Chars[0]; 
        if (!(($Char >= '0' and $Char <= '9') or $Char == '-')) 
            return false;
        for ($i = 1, $Char = $Chars[1]; $i - strlen($Chars); $Char = $Chars[++$i])
            if (!($Char >= '0' and $Char <= '9')) 
                return false;
        return true;
    } 

    private function NOD_Values() 
    {
        $Numer = $this->Numerator;
        $Denom = $this->Denominator;
        while($Numer and $Denom) 
            (abs($Numer) > abs($Denom)) ? $Numer %= $Denom : $Denom %= $Numer; 
        $this->Numerator /= ($Numer + $Denom);
        $this->Denominator /= ($Numer + $Denom);
    }

    function getNumer() { return $this->Numerator; }

    function getDenom() { return $this->Denominator; } 

    function add($frac) 
    {
        $this->Numerator = $this->Numerator*$frac->getDenom() + $this->Denominator*$frac->getNumer();
        $this->Denominator *= $frac->getDenom();
        $this->NOD_Values();
        return $this->__toString();
    } 

    function sub($frac) 
    {
        if ($frac->getNumer() < 0) 
        {
            $frac->Numerator = -$frac->getNumer();
            return $this->add($frac);
        }
        $this->Numerator = $this->Numerator*$frac->getDenom() - $this->Denominator*$frac->getNumer();
        $this->Denominator *= $frac->getDenom();
        $this->NOD_Values();
        return $this->__toString();
    }     

    function __toString() 
    {
        if (abs($this->Numerator) > abs($this->Denominator)) 
        {
            $New_Numer = $this->Numerator % $this->Denominator; 
            return (($this->Numerator - $New_Numer)/$this->Denominator).'\''.($New_Numer < 0 ? -$New_Numer : $New_Numer).'/'.($this->Denominator < 0 ? -$this->Denominator : $this->Denominator);
        } 
        if (!($this->Numerator - $this->Denominator))
            return 1; 
        return $this->Numerator.'/'.$this->Denominator;
    }


}