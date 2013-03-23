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
 * New York City geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class NewYork extends Region
{
    // Source: http://en.wikipedia.org/wiki/New_York_metropolitan_area
    const LAT_CENTER =  40.808611;
    const LNG_CENTER = -74.020386;
}
