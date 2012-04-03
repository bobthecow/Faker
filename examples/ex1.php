<?php
define("SRC","../src/");

spl_autoload_extensions(".php");
spl_autoload_register("classLoader");

/*** class Loader ***/
function classLoader($class)
{
    $filename = $class.'.php';
    $file = SRC . DIRECTORY_SEPARATOR . $filename;
    if (!file_exists($file))
    {
        return false;
    }
    include $file;
	return true;
}


echo "<p>".\Faker\Address::address();
echo "<p>".\Faker\Address::streetName();
echo "<p>".\Faker\Address::streetAddress($includeSecondary = false);
echo "<p>".\Faker\Address::city();
echo "<p>".\Faker\Address::state();
echo "<p>".\Faker\Address::stateAbbr();
echo "<p>".\Faker\Address::zipCode();
echo "<p>".\Faker\Address::zip();
echo "<p>".\Faker\Address::postcode();
echo "<p>".\Faker\Address::cityStateZip();
echo "<p>".\Faker\Address::country();

echo "<p>".\Faker\Company::name();
echo "<p>".\Faker\Company::suffix();
echo "<p>".\Faker\Company::catchPhrase();
echo "<p>".\Faker\Company::bs();

echo "<p>".\Faker\DateTime::timestamp();
echo "<p>".\Faker\DateTime::date($format = null);
echo "<p>".\Faker\DateTime::dateFormat();
echo "<p>".\Faker\DateTime::time($format = null);
echo "<p>".\Faker\DateTime::timeFormat();
echo "<p>".\Faker\DateTime::dateTime($format = null);
echo "<p>".\Faker\DateTime::dateTimeFormat();
echo "<p>".\Faker\DateTime::month();
echo "<p>".\Faker\DateTime::monthAbbr();
echo "<p>".\Faker\DateTime::weekday();
echo "<p>".\Faker\DateTime::weekdayAbbr();

echo "<p>".\Faker\Internet::email($name = null);
echo "<p>".\Faker\Internet::freeEmail($name = null);
echo "<p>".\Faker\Internet::safeEmail($name = null);
echo "<p>".\Faker\Internet::userName($name = null);
echo "<p>".\Faker\Internet::domainName();
echo "<p>".\Faker\Internet::safeDomainName();
echo "<p>".\Faker\Internet::domainWord();
echo "<p>".\Faker\Internet::domainSuffix();
echo "<p>".\Faker\Internet::ipv4Address();
echo "<p>".\Faker\Internet::slug($str = null, $glue = array('.', '-', '_'));

echo "<p>".\Faker\Lorem::word();
echo "<pre>".print_r(\Faker\Lorem::words($num = 3),true)."</pre>";
echo "<p>".\Faker\Lorem::sentence($wordCount = 4);
echo "<pre>".print_r(\Faker\Lorem::sentences($sentenceCount = 3),true)."</pre>";
echo "<p>".\Faker\Lorem::paragraph($sentenceCount = 3);
echo "<pre>".print_r(\Faker\Lorem::paragraphs($paragraphCount = 3),true)."</pre>";

echo "<p>".\Faker\Name::name();
echo "<p>".\Faker\Name::firstName();
echo "<p>".\Faker\Name::lastName();
echo "<p>".\Faker\Name::prefix();
echo "<p>".\Faker\Name::suffix();

echo "<p>".\Faker\PhoneNumber::phoneNumber();
echo "<p>".\Faker\PhoneNumber::safePhoneNumber();

