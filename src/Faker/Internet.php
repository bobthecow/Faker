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

abstract class Internet extends Faker
{
    public static function email($name = null)
    {
        return implode('@', array(self::userName($name), self::domainName()));
    }

    public static function freeEmail($name = null)
    {
        return implode('@', array(self::userName($name), self::pickOne(array('gmail.com', 'yahoo.com', 'hotmail.com'))));
    }

    public static function userName($name = null)
    {
        if ($name !== null) {
            $email = preg_split('/\W+/', $name);
            shuffle($email);
            $email = implode(self::separator(), $email);
        } else {
            $email = sprintf(
                self::pickOne(array(
                    '%s',
                    '%s%s%s'
                )),
                Name::firstName(),
                self::separator(),
                Name::lastName()
            );
        }

        return strtolower(preg_replace('/\W/', '', $email));
    }

    public static function domainName()
    {
        return implode('.', array(self::domainWord(), self::domainSuffix()));
    }

    public static function domainWord()
    {
        list($first) = explode(' ', Company::name());
        return strtolower(preg_replace('/\W/', '', $first));
    }

    public static function domainSuffix()
    {
        return self::pickOne(array('com', 'biz', 'info', 'name', 'net', 'org'));
    }

    public static function ipv4Address()
    {
        return implode('.', array(rand(0,255), rand(0,255), rand(0,255), rand(0,255)));
    }

    private static function separator()
    {
        return self::pickOne(array('.', '_'));
    }
}
