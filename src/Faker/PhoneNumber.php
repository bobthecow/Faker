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
 * Phone number Faker.
 *
 * @abstract
 * @extends Faker
 */
abstract class PhoneNumber extends Faker
{
    /**
     * Generate a random US phone number.
     *
     * @access public
     * @static
     * @return string Phone number
     */
    public static function phoneNumber()
    {
        return self::numerify(self::pickOne(array(
            '###-###-####', '(###)###-####', '1-###-###-####', '###.###.####', '###-###-####', '(###)###-####',
            '1-###-###-####', '###.###.####', '###-###-#### x###', '(###)###-#### x###', '1-###-###-#### x###',
            '###.###.#### x###', '###-###-#### x####', '(###)###-#### x####', '1-###-###-#### x####',
            '###.###.#### x####', '###-###-#### x#####', '(###)###-#### x#####', '1-###-###-#### x#####',
            '###.###.#### x#####'
        )));
    }

    /**
     * Generate a random "safe" US phone number, i.e. with area code 555.
     *
     * @access public
     * @static
     * @return string Phone number
     */
    public static function safePhoneNumber()
    {
        return self::numerify(self::pickOne(array(
            '555-###-####', '(555)###-####', '1-555-###-####', '555.###.####', '555-###-####', '(555)###-####',
            '1-555-###-####', '555.###.####', '555-###-#### x###', '(555)###-#### x###', '1-555-###-#### x###',
            '555.###.#### x###', '555-###-#### x####', '(555)###-#### x####', '1-555-###-#### x####',
            '555.###.#### x####', '555-###-#### x#####', '(555)###-#### x#####', '1-555-###-#### x#####',
            '555.###.#### x#####'
        )));
    }
}
