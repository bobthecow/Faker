<?php

/*
 * This file is part of the Faker package.
 *
 * (c) 2011 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Faker;

/**
 * Base Faker class, consisting of helper methods for selecting and formatting fake data.
 *
 * @abstract
 */
abstract class Faker
{
    protected static $rand = null;

    public static function seed($seed)
    {
        if (!isset(self::$rand)) {
            self::$rand = new MersenneTwister($seed);
        } else {
            self::$rand->setSeed($seed);
        }
    }

    protected static function numerify($numberString)
    {
        return preg_replace_callback("/#/", array('self', 'number'), $numberString);
    }

    public static function number()
    {
        return self::rand(0, 9);
    }

    protected static function letterify($letterString)
    {
        return preg_replace_callback("/\?/", array('self', 'letter'), $letterString);
    }

    public static function letter()
    {
        return chr(self::rand(97, 122));
    }

    protected static function bothify($string)
    {
        return self::letterify(self::numerify($string));
    }

    protected static function pickOne(array $options)
    {
        return $options[self::arrayRand($options)];
    }

    public static function rand($min = null, $max = null)
    {
        if (isset(self::$rand)) {
            return self::$rand->getNext($min, $max);
        } else {
            return rand($min, $max);
        }
    }

    public static function arrayRand(array $array)
    {
        $keys = array_keys($array);
        return $keys[self::rand(0, (count($keys) -1))];
    }

    public static function shuffle(array $array)
    {
        $ret = $array;
        $rand = array(get_class(), 'rand');
        uasort($ret, function($a, $b) use ($rand) {
            return call_user_func($rand, -1, 1);
        });
        return $ret;
    }
}