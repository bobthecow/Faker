<?php

/*
 * This file is part of the Faker package.
 *
 * (c) 2013 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Faker\Geo;

use Faker\Geo as BaseGeo;

/**
 * Region geolocation Faker base class.
 *
 * @abstract
 * @extends Faker\Geo
 */
abstract class Region extends BaseGeo
{
    /**
     * Get a southwest / northeast pair of points defining the bounds of this
     * region.
     *
     * @access  public
     * @static
     * @return  array [[$swLat, $swLng], [$neLat, $neLong]]
     */
    public static function bounds()
    {
        return array(
            array(
                self::LAT => static::LAT_CENTER - 0.5,
                self::LNG => static::LNG_CENTER - 0.5,
            ),
            array(
                self::LAT => static::LAT_CENTER + 0.5,
                self::LNG => static::LNG_CENTER + 0.5,
            ),
        );
    }
}
