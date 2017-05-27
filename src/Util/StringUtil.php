<?php

namespace Shibby\Loilerplate\Util;

class StringUtil
{
    public static function slug($string, $sep)
    {
        $string = str_replace(
            ['ı', 'ş', 'ö', 'ç', 'ğ', 'ü', 'Ğ', 'Ş', 'Ö', 'Ü', 'İ', 'Ç'],
            ['i', 's', 'o', 'c', 'g', 'u', 'G', 'S', 'O', 'U', 'I', 'C'],
            $string
        );

        return str_slug($string, $sep);
    }
}
