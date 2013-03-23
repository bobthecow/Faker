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
 * Portland, OR geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class Portland extends Region
{
    // Source https://en.wikipedia.org/wiki/Portland,_Oregon
    const LAT_CENTER =   45.52;
    const LNG_CENTER = -122.681944;
}
