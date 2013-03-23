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
 * United States geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo
 */
abstract class UnitedStates extends BaseGeo
{
    // Source: http://en.wikipedia.org/wiki/Extreme_points_of_the_United_States
    const LAT_MIN  =   24.520833;
    const LAT_MAX  =   49.384472;
    const LONG_MIN = -124.771694;
    const LONG_MAX =  -66.949778;
}
