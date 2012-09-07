Faker
=====

[Faker][php] is a PHP port of [a Ruby port][ruby] of [`Data::Faker` from Perl][perl].

It's a convoluted path, but you're the beneficiary of a simple way to generate fake
data for your PHP 5.3 project.


Usage is fairly straightforward:
--------------------------------

    echo \Faker\Name::name();    // "Leeroy Jenkins"


There are a few more to choose from:
------------------------------------

    \Faker\Address::address();
    \Faker\Address::streetName();
    \Faker\Address::streetAddress($includeSecondary = false);
    \Faker\Address::city();
    \Faker\Address::state();
    \Faker\Address::stateAbbr();
    \Faker\Address::zipCode();
    \Faker\Address::zip();
    \Faker\Address::postcode();
    \Faker\Address::cityStateZip();
    \Faker\Address::country();
    
    \Faker\Company::name();
    \Faker\Company::suffix();
    \Faker\Company::catchPhrase();
    \Faker\Company::bs();
    
    \Faker\DateTime::timestamp();
    \Faker\DateTime::date($format = null);
    \Faker\DateTime::dateFormat();
    \Faker\DateTime::time($format = null);
    \Faker\DateTime::timeFormat();
    \Faker\DateTime::dateTime($format = null);
    \Faker\DateTime::dateTimeFormat();
    \Faker\DateTime::month();
    \Faker\DateTime::monthAbbr();
    \Faker\DateTime::weekday();
    \Faker\DateTime::weekdayAbbr();

    \Faker\Internet::email($name = null);
    \Faker\Internet::freeEmail($name = null);
    \Faker\Internet::safeEmail($name = null);
    \Faker\Internet::userName($name = null);
    \Faker\Internet::domainName();
    \Faker\Internet::safeDomainName();
    \Faker\Internet::domainWord();
    \Faker\Internet::domainSuffix();
    \Faker\Internet::ipv4Address();
    \Faker\Internet::slug($str = null, $glue = array('.', '-', '_'));
    
    \Faker\Lorem::word();
    \Faker\Lorem::words($num = 3);
    \Faker\Lorem::sentence($wordCount = 4);
    \Faker\Lorem::sentences($sentenceCount = 3);
    \Faker\Lorem::paragraph($sentenceCount = 3);
    \Faker\Lorem::paragraphs($paragraphCount = 3);
    
    \Faker\Name::name();
    \Faker\Name::firstName();
    \Faker\Name::lastName();
    \Faker\Name::prefix();
    \Faker\Name::suffix();
    
    \Faker\PhoneNumber::phoneNumber();
    \Faker\PhoneNumber::safePhoneNumber();

    \Faker\Token::token();


Yeah,
-----

... it's an entire library made up of static methods. Just to bug [Bulat][bulat] :)


 [php]:   http://github.com/bobthecow/Faker
 [ruby]:  http://faker.rubyforge.org/
 [perl]:  http://search.cpan.org/~jasonk/Data-Faker-0.07/lib/Data/Faker.pm
 [bulat]: http://github.com/avalanche123