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
 * São Paulo geolocation Faker.
 *
 * @abstract
 * @extends Faker\Geo\Region
 */
abstract class SaoPaulo extends Region
{
    // http://en.wikipedia.org/wiki/Greater_São_Paulo
    const LAT_CENTER = -23.547778;
    const LNG_CENTER = -46.635833;
}
