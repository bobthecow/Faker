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

abstract class PhoneNumber extends Faker
{
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
}
