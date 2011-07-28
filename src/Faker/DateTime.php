<?php

/*
 * This file is part of the Faker package.
 *
 * (c) 2011 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Faker;

abstract class DateTime extends Faker
{
    public static function timestamp()
    {
        return rand(0, time());
    }

    public static function date($format = null)
    {
        return date($format ?: self::dateFormat(), self::timestamp());
    }

    public static function dateFormat()
    {
        return self::pickOne(array(
            'D, d M y',
            'D, d M Y',
            'l, d-M-y',
            'Y-m-d',
        ));
    }

    public static function time($format = null)
    {
        return date($format ?: self::timeFormat(), self::timestamp());
    }

    public static function timeFormat()
    {
        return self::pickOne(array(
            'H:i:s O',
            'H:i:s T',
            'H:i:sO',
            'H:i:sP',
        ));
    }

    public static function dateTime($format = null)
    {
        return date($format ?: self::dateTimeFormat(), self::timestamp());
    }

    public static function dateTimeFormat()
    {
        return self::pickOne(array(
            DATE_ATOM,
            DATE_COOKIE,
            DATE_ISO8601,
            DATE_RFC822,
            DATE_RFC850,
            DATE_RFC1036,
            DATE_RFC1123,
            DATE_RFC2822,
            DATE_RSS,
            DATE_W3C,
        ));
    }

    public static function month()
    {
        return date("F", self::monthTimestamp(rand(1, 12)));
    }

    public static function monthAbbr()
    {
        return date("M", self::monthTimestamp(rand(1, 12)));
    }

    private static function monthTimestamp($month)
    {
        return mktime(0, 0, 0, $month, 1);
    }

    public static function weekday()
    {
        return date("l", self::weekdayTimestamp(rand(1, 7)));
    }

    public static function weekdayAbbr()
    {
        return date("D", self::weekdayTimestamp(rand(1, 7)));
    }

    private static function weekdayTimestamp($day)
    {
        // 1 Jan 2010 was a Saturday, so 1 == Sunday, 2 == Monday, etc.
        return mktime(1, 1, 1, 1, 1 + $day, 2010);
    }
}
