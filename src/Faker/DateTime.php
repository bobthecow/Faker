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

/**
 * Date and time Faker.
 *
 * @abstract
 * @extends Faker
 */
abstract class DateTime extends Faker
{
    /**
     * Generate a random Unix timestamp.
     *
     * @access public
     * @static
     * @return int Unix timestamp
     */
    public static function timestamp()
    {
        return rand(0, time());
    }

    /**
     * Generate a random date string.
     *
     * Optionally, pass a $format string. If none is given, a random date format will
     * be selected
     *
     * @see \Faker\DateTime::dateFormat
     *
     * @access public
     * @static
     * @param string $format (default: null)
     * @return string Formatted date
     */
    public static function date($format = null)
    {
        return date($format ?: self::dateFormat(), self::timestamp());
    }

    /**
     * Return a random date format.
     *
     * @access public
     * @static
     * @return string Date format
     */
    public static function dateFormat()
    {
        return self::pickOne(array(
            'D, d M y',
            'D, d M Y',
            'l, d-M-y',
            'Y-m-d',
        ));
    }

    /**
     * Generate a random time string.
     *
     * Optionally, pass a $format string. If none is given, a random time format
     * will be selected.
     *
     * @see \Faker\DateTime::timeFormat
     *
     * @access public
     * @static
     * @param string $format (default: null)
     * @return string Formatted time
     */
    public static function time($format = null)
    {
        return date($format ?: self::timeFormat(), self::timestamp());
    }

    /**
     * Return a random time format.
     *
     * @access public
     * @static
     * @return string Time format
     */
    public static function timeFormat()
    {
        return self::pickOne(array(
            'H:i:s O',
            'H:i:s T',
            'H:i:sO',
            'H:i:sP',
        ));
    }

    /**
     * Generate a random date and time string.
     *
     * Optionally pass a $format string. If none is given, a random date and time
     * format will be selected.
     *
     * @see \Faker\DateTime::dateTimeFormat
     *
     * @access public
     * @static
     * @param string $format (default: null)
     * @return string Date and time string.
     */
    public static function dateTime($format = null)
    {
        return date($format ?: self::dateTimeFormat(), self::timestamp());
    }

    /**
     * Return a random date and time format.
     *
     * @access public
     * @static
     * @return string Date and time format
     */
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

    /**
     * Return a random month name.
     *
     * @access public
     * @static
     * @return string Month name
     */
    public static function month()
    {
        return date("F", self::monthTimestamp(rand(1, 12)));
    }

    /**
     * Return a random month abbreviation.
     *
     * @access public
     * @static
     * @return string Month abbreviation
     */
    public static function monthAbbr()
    {
        return date("M", self::monthTimestamp(rand(1, 12)));
    }

    private static function monthTimestamp($month)
    {
        return mktime(0, 0, 0, $month, 1);
    }

    /**
     * Return a random weekday name.
     *
     * @access public
     * @static
     * @return string Weekday name
     */
    public static function weekday()
    {
        return date("l", self::weekdayTimestamp(rand(1, 7)));
    }

    /**
     * Return a random weekday abbreviation.
     *
     * @access public
     * @static
     * @return string weekday abbreviation
     */
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
