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
 * San Francisco geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class SanFrancisco extends Region
{
    const LAT_CENTER =  40.808611;
    const LNG_CENTER = -74.020386;
}
