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
 * Buenos Aires geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class BuenosAires extends Region
{
    // Source: http://en.wikipedia.org/wiki/Buenos_Aires
    const LAT_CENTER = -34.603333;
    const LNG_CENTER = -58.381667;
}
