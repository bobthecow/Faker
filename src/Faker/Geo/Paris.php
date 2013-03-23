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
 * Paris geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class Paris extends Region
{
    // Source: http://en.wikipedia.org/wiki/Paris
    const LAT_CENTER = 48.8567;
    const LNG_CENTER =  2.3508;
}
