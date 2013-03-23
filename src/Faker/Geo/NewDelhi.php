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
 * New Delhi geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class NewDelhi extends Region
{
    // Source: http://en.wikipedia.org/wiki/New_Delhi
    const LAT_CENTER = 28.613889;
    const LNG_CENTER = 77.208889;
}
