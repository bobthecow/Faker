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
 * Miami geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class Miami extends Region
{
    // Source: https://en.wikipedia.org/wiki/Miami
    const LAT_CENTER =   25.77;
    const LNG_CENTER = -80.20;
}
