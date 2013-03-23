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
 * Mexico City geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class MexicoCity extends Region
{
    // Source: http://en.wikipedia.org/wiki/Mexico_City
    const LAT_CENTER =  19.433333;
    const LNG_CENTER = -99.133333;
}
