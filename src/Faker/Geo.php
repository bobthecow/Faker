<?php

/*
 * This file is part of the Faker package.
 *
 * (c) 2013 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Faker;

/**
 * Geolocation Faker.
 *
 * @abstract
 * @extends Faker
 */
abstract class Geo extends Faker
{
    // Source: http://en.wikipedia.org/wiki/Extreme_points_of_the_United_States
    const US_LAT_MIN  =   24.520833;
    const US_LAT_MAX  =   49.384472;
    const US_LONG_MIN = -124.771694;
    const US_LONG_MAX =  -66.949778;

    /**
     * Generate random latlong coordinates, as an array.
     *
     * @access public
     * @static
     * @param int $precision (default: 4)
     * @return array [Latitude, Longitude]
     */
    public static function point($precision = 4)
    {
        return array(self::latitude($precision), self::longitude($precision));
    }

    /**
     * Generate random latlong coordinates, approximately with the 48 contiguous
     * United States.
     *
     * @access public
     * @static
     * @param int $precision (default: 4)
     * @return array [Latitude, Longitude]
     */
    public static function usPoint($precision = 4)
    {
        return array(self::usLatitude($precision), self::usLongitude($precision));
    }

    /**
     * Generate random latlong coordinates, formatted as degrees, minutes and
     * seconds.
     *
     *     45°30'15" -90°30'15"
     *
     * @access public
     * @static
     * @param int $precision (default: 4)
     * @return string Formatted latlong coordinates
     */
    public static function pointDMS()
    {
        return sprintf('%s %s', self::latitudeDMS(), self::longitudeDMS());
    }

    /**
     * Generate random latlong coordinates, formatted as degrees, minutes and
     * seconds, approximately within the 48 contiguous United States.
     *
     *     45°30'15" -90°30'15"
     *
     * @access public
     * @static
     * @return string Formatted US latlong coordinates
     */
    public static function usPointDMS()
    {
        return sprintf('%s %s', self::usLatitudeDMS(), self::usLongitudeDMS());
    }

    /**
     * Generate a random latitude angle.
     *
     * @access public
     * @static
     * @param int $precision (default: 4)
     * @return float Latitude angle
     */
    public static function latitude($precision = 4)
    {
        return self::randFloat(-90, 90, $precision);
    }

    /**
     * Generate a random latitude angle, approximately within the 48 contiguous
     * United States.
     *
     * @access public
     * @static
     * @param int $precision (default: 4)
     * @return float US latitude angle
     */
    public static function usLatitude($precision = 4)
    {
        return self::randFloat(self::US_LAT_MIN, self::US_LAT_MAX, $precision);
    }

    /**
     * Generate a random latitude angle, formatted as degrees, minutes and
     * seconds.
     *
     *     45°30'15"
     *
     * @access public
     * @static
     * @return string Formatted latitude angle
     */
    public static function latitudeDMS()
    {
        return self::randDMS(-90, 90);
    }

    /**
     * Generate a random latitude angle, formatted as degrees, minutes and
     * seconds, approximately within the 48 contiguous United States.
     *
     *     45°30'15"
     *
     * @access public
     * @static
     * @return string Formatted US latitude angle
     */
    public static function usLatitudeDMS()
    {
        return self::randDMS(self::US_LAT_MIN, self::US_LAT_MAX);
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds.
     *
     * @access public
     * @static
     * @return float Longitude angle
     */
    public static function longitude($precision = 4)
    {
        return self::randFloat(-180, 180, $precision);
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds, approximately within the 48 contiguous United States.
     *
     * @access public
     * @static
     * @return float US longitude angle
     */
    public static function usLongitude($precision = 4)
    {
        return self::randFloat(self::US_LONG_MIN, self::US_LONG_MAX, $precision);
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds.
     *
     *     -90°30'15"
     *
     * @access public
     * @static
     * @return string Formatted longitude angle
     */
    public static function longitudeDMS()
    {
        return self::randDMS(-180, 180);
    }

    /**
     * Generate a random longitude angle, formatted as degrees, minutes and
     * seconds, approximately within the 48 contiguous United States.
     *
     *     -90°30'15"
     *
     * @access public
     * @static
     * @return string Formatted US longitude angle
     */
    public static function usLongitudeDMS()
    {
        return self::randDMS(self::US_LONG_MIN, self::US_LONG_MAX);
    }

    private static function randFloat($min, $max, $precision = 4)
    {
        return round($min + (lcg_value() * abs($max - $min)), $precision);
    }

    private static function randDMS($min, $max)
    {
        return self::floatToDMS(self::randFloat($min, $max));
    }

    private static function floatToDMS($float)
    {
        $deg    = floor($float);
        $minSec = abs($float - $deg) * 60;
        $min    = floor($minSec);
        $sec    = floor(abs($minSec - $min) * 60);

        return sprintf('%d°%d\'%d"', $deg, $min, $sec);
    }
}
