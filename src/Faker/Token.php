<?php

/*
 * This file is part of the Faker package.
 *
 * (c) 2011 Justyn Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Faker;

/**
 * Token Faker. Could include SHA generator?
 *
 * @abstract
 * @extends Faker
 */
abstract class Token extends Faker
{
    /**
     * Generate a random token consisting of letters and numbers.
     *
     * @access public
     * @param string $minlen (default: 4)
     * @param string $maxlen (default: 8)
     * @static
     * @return string Token
     */
    public static function token($minlen = 4, $maxlen = 8)
    {
        $template = str_pad('',rand($minlen, $maxlen), '.');
        return self::bothify($template);
    }
}
