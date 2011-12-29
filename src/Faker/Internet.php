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
 * Internet Faker.
 *
 * @abstract
 * @extends Faker
 */
abstract class Internet extends Faker
{
    /**
     * Generate a random email address.
     *
     * Optionally, pass the user's name, from which the username portion of the email address
     * will be generated.
     *
     * @see \Faker\Internet::userName
     * @see \Faker\Internet::domainName
     *
     * @access public
     * @static
     * @param string $name (default: null)
     * @return string Email address
     */
    public static function email($name = null)
    {
        return implode('@', array(self::userName($name), self::domainName()));
    }

    /**
     * Generate a random "free" email address, e.g. at "gmail.com".
     *
     * Optionally, pass the user's name, from which the username portion of the email address
     * will be generated.
     *
     * @see \Faker\Internet::userName
     *
     * @access public
     * @static
     * @param string $name (default: null)
     * @return string Email address
     */
    public static function freeEmail($name = null)
    {
        return implode('@', array(self::userName($name), self::pickOne(array('gmail.com', 'yahoo.com', 'hotmail.com'))));
    }

    /**
     * Generate a random "safe" email address, e.g. at "example.com".
     *
     * Optionally, pass the user's name, from which the username portion of the email address
     * will be generated.
     *
     * @see \Faker\Internet::userName
     *
     * @access public
     * @static
     * @param string $name (default: null)
     * @return string Email address
     */
    public static function safeEmail($name = null)
    {
        return implode('@', array(self::userName($name), self::safeDomainName()));
    }

    /**
     * Generate a random username.
     *
     * Optionally, supply a user's name, from which the username will be generated.
     *
     * @access public
     * @static
     * @param string $name (default: null)
     * @return string Username
     */
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

    /**
     * Generate a random domain name.
     *
     * @access public
     * @static
     * @return string Domain name
     */
    public static function domainName()
    {
        return implode('.', array(self::domainWord(), self::domainSuffix()));
    }

    /**
     * Generate a random "safe" domain name, e.g. a subdomain of "example.com".
     *
     * @access public
     * @static
     * @return string Domain name
     */
    public static function safeDomainName()
    {
        return implode('.', array(self::domainWord(), self::pickOne(array('example.com', 'example.net', 'example.org'))));
    }

    /**
     * Generate a random domain base word, e.g. a company name.
     *
     * @access public
     * @static
     * @return string Domain word
     */
    public static function domainWord()
    {
        list($first) = explode(' ', Company::name());
        return strtolower(preg_replace('/\W/', '', $first));
    }

    /**
     * Return a random top level domain, e.g. .com or .info.
     *
     * @access public
     * @static
     * @return string Domain suffix
     */
    public static function domainSuffix()
    {
        return self::pickOne(array('com', 'biz', 'info', 'name', 'net', 'org'));
    }

    /**
     * Generate a random IPv4 address.
     *
     * @access public
     * @static
     * @return string IPv4 address
     */
    public static function ipv4Address()
    {
        return implode('.', array(rand(0,255), rand(0,255), rand(0,255), rand(0,255)));
    }

    /**
     * Generate slug, optionally based on a string (like a title)
     *
     * @access public
     * @static
     * @param string        $str (default: null)
     * @param array|string  $glue (default: array('.', '-', '_')) Picks one glue if array, otherwise uses the string
     * @return string URL slug
     */
    public static function slug($str = null, $glue = array('.', '-', '_'))
    {
        $words = ($str === null) ? Lorem::words() : array_filter(preg_split('/\W+/', $str));
        return strtolower(implode(is_array($glue) ? self::pickOne($glue) : (string) $glue, $words));
    }

    private static function separator()
    {
        return self::pickOne(array('.', '_'));
    }
}
