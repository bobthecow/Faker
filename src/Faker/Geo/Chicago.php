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

/**
 * Chicago geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class Chicago extends Region
{
    // Source: http://en.wikipedia.org/wiki/Chicago_metropolitan_area
    const LAT_CENTER =  41.9;
    const LNG_CENTER = -87.65;
}
