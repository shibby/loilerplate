<?php

namespace Shibby\Loilerplate\Util;

/**
 * @author Guven Atbakan <guven@atbakan.com>
 */
class DateUil
{
    public static function formatDate($date, $format = 'date')
    {
        if ($format === 'datetime') {
            $format = 'd/m/Y H:i:s';
        } elseif ($format === 'date') {
            $format = 'd/m/Y';
        }
        if ($date instanceof \DateTime) {
            return $date->format($format);
        }
    }
}
