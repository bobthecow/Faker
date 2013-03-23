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
 * London geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class London extends Region
{
    // Source: http://en.wikipedia.org/wiki/London
    const LAT_CENTER = 51.507222;
    const LNG_CENTER = -0.1275;
}
