<?php

namespace Shibby\Loilerplate\Util;

/**
 * @author Guven Atbakan <guven@atbakan.com>
 */
class DateUtil
{
    public static function formatDate($date, $format = 'date')
    {
        if ($format === 'datetime') {
            $format = 'd/m/Y H:i:s';
        } elseif ($format === 'date') {
            $format = 'd/m/Y';
        }
        if (is_string($date)) {
            $date = new \DateTime($date);
        }
        if ($date instanceof \DateTime) {
            return $date->format($format);
        }
    }

    public static function stringToDatetime($date, $format)
    {
        if (!$date) {
            return;
        }
        if ($date instanceof \DateTime) {
            return $date;
        }
        $datetime = \Datetime::createFromFormat($format, $date);
        if ($datetime instanceof \DateTimeInterface && $datetime->format($format) === $date) {
            return $datetime;
        }

        return;
    }
}
