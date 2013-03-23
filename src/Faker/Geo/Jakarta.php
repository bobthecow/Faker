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
 * Jakarta geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class Jakarta extends Region
{
    // Source: http://en.wikipedia.org/wiki/Jakarta
    const LAT_CENTER =  -6.2;
    const LNG_CENTER = 106.8;
}
