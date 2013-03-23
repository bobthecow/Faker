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
 * Tokyo geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class Tokyo extends Region
{
    // Source: http://en.wikipedia.org/wiki/Greater_Tokyo_Area
    const LAT_CENTER =  35.689722;
    const LNG_CENTER = 139.691667;
}
