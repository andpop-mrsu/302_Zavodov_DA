<?php

namespace DZavodov\Task05;

class Truncater
{
    private static $defaultOptions = array( 'length' => 50, 'separator' => '...');

    public function __construct($Array = false)
    {
        if ($Array) {
            foreach ($Array as $Key => $Value) {
                self::$defaultOptions[$Key] = $Value;
            }
        }
    }

    public function truncate($String, $Options_String = false)
    {
        $New_String = '';
        #echo Option, ' = &nbsp '; var_dump($Options_String); echo '<br><br>';
        if ($Options_String) {
            $Length_String = isset($Options_String['length']) ? $Options_String['length'] : '';
            if (!$Length_String or $Length_String and $Length_String <= 0) {
                $Length_String = self::$defaultOptions['length'];
            }
            for ($i = 0; $i < mb_strlen($String) and $i < $Length_String;) {
                $New_String .= mb_substr($String, $i++, 1);
            }
        } else {
            for ($i = 0; $i < mb_strlen($String) and $i < self::$defaultOptions['length'];) {
                $New_String .= mb_substr($String, $i++, 1);
            }
        }
        return (isset($Options_String['separator']) ? $New_String . $Options_String['separator'] : $New_String . self::$defaultOptions['separator'] );
    }
}
