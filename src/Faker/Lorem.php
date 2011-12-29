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
 * Lorem Ipsum Faker.
 *
 * @abstract
 * @extends Faker
 */
abstract class Lorem extends Faker
{
    /**
     * Return a random "lorem ipsum" word.
     *
     * @access public
     * @static
     * @return string Word
     */
    public static function word()
    {
        $words = self::words(1);
        return reset($words);
    }
    
    /**
     * Return random "lorem ipsum" words.
     *
     * @access public
     * @static
     * @param int $num Number of words (default: 3)
     * @return array Words
     */
    public static function words($num = 3)
    {
        $words = array(
            'alias', 'consequatur', 'aut', 'perferendis', 'sit', 'voluptatem', 'accusantium', 'doloremque', 'aperiam',
            'eaque', 'ipsa', 'quae', 'ab', 'illo', 'inventore', 'veritatis', 'et', 'quasi', 'architecto', 'beatae',
            'vitae', 'dicta', 'sunt', 'explicabo', 'aspernatur', 'aut', 'odit', 'aut', 'fugit', 'sed', 'quia',
            'consequuntur', 'magni', 'dolores', 'eos', 'qui', 'ratione', 'voluptatem', 'sequi', 'nesciunt', 'neque',
            'dolorem', 'ipsum', 'quia', 'dolor', 'sit', 'amet', 'consectetur', 'adipisci', 'velit', 'sed', 'quia',
            'non', 'numquam', 'eius', 'modi', 'tempora', 'incidunt', 'ut', 'labore', 'et', 'dolore', 'magnam',
            'aliquam', 'quaerat', 'voluptatem', 'ut', 'enim', 'ad', 'minima', 'veniam', 'quis', 'nostrum',
            'exercitationem', 'ullam', 'corporis', 'nemo', 'enim', 'ipsam', 'voluptatem', 'quia', 'voluptas', 'sit',
            'suscipit', 'laboriosam', 'nisi', 'ut', 'aliquid', 'ex', 'ea', 'commodi', 'consequatur', 'quis', 'autem',
            'vel', 'eum', 'iure', 'reprehenderit', 'qui', 'in', 'ea', 'voluptate', 'velit', 'esse', 'quam', 'nihil',
            'molestiae', 'et', 'iusto', 'odio', 'dignissimos', 'ducimus', 'qui', 'blanditiis', 'praesentium',
            'laudantium', 'totam', 'rem', 'voluptatum', 'deleniti', 'atque', 'corrupti', 'quos', 'dolores', 'et',
            'quas', 'molestias', 'excepturi', 'sint', 'occaecati', 'cupiditate', 'non', 'provident', 'sed', 'ut',
            'perspiciatis', 'unde', 'omnis', 'iste', 'natus', 'error', 'similique', 'sunt', 'in', 'culpa', 'qui',
            'officia', 'deserunt', 'mollitia', 'animi', 'id', 'est', 'laborum', 'et', 'dolorum', 'fuga', 'et', 'harum',
            'quidem', 'rerum', 'facilis', 'est', 'et', 'expedita', 'distinctio', 'nam', 'libero', 'tempore', 'cum',
            'soluta', 'nobis', 'est', 'eligendi', 'optio', 'cumque', 'nihil', 'impedit', 'quo', 'porro', 'quisquam',
            'est', 'qui', 'minus', 'id', 'quod', 'maxime', 'placeat', 'facere', 'possimus', 'omnis', 'voluptas',
            'assumenda', 'est', 'omnis', 'dolor', 'repellendus', 'temporibus', 'autem', 'quibusdam', 'et', 'aut',
            'consequatur', 'vel', 'illum', 'qui', 'dolorem', 'eum', 'fugiat', 'quo', 'voluptas', 'nulla', 'pariatur',
            'at', 'vero', 'eos', 'et', 'accusamus', 'officiis', 'debitis', 'aut', 'rerum', 'necessitatibus', 'saepe',
            'eveniet', 'ut', 'et', 'voluptates', 'repudiandae', 'sint', 'et', 'molestiae', 'non', 'recusandae',
            'itaque', 'earum', 'rerum', 'hic', 'tenetur', 'a', 'sapiente', 'delectus', 'ut', 'aut', 'reiciendis',
            'voluptatibus', 'maiores', 'doloribus', 'asperiores', 'repellat'
        );
        shuffle($words);
        return array_slice($words, 0, $num);
    }

    /**
     * Generate a random sentence.
     *
     * Optionally, supply a base number of words to include. The actual number of words in the
     * sentence will be a random number between $wordCount and $wordCount + 6.
     *
     * @access public
     * @static
     * @param int $wordCount Minimum number of words in the sentence (default: 4)
     * @return string Sentence
     */
    public static function sentence($wordCount = 4)
    {
        return ucfirst(implode(' ', self::words(rand($wordCount, $wordCount + 6)))) . '.';
    }

    /**
     * Generate random sentences.
     *
     * @access public
     * @static
     * @param int $sentenceCount Number of sentences (default: 3)
     * @return array Sentences
     */
    public static function sentences($sentenceCount = 3)
    {
        $ret = array();
        for ($i = 0; $i < $sentenceCount; $i++) {
            $ret[] = self::sentence();
        }
        return $ret;
    }

    /**
     * Generate a random paragraph.
     *
     * Optionally, supply a base number of sentences to include. The actual number of sentences
     * in the paragraph will be a random number between $sentenceCount and $sentenceCount + 3.
     *
     * @access public
     * @static
     * @param int $sentenceCount Minimum number of sentences to include (default: 3)
     * @return string Paragraph
     */
    public static function paragraph($sentenceCount = 3)
    {
        return implode(' ', self::sentences(rand($sentenceCount, $sentenceCount + 3)));
    }

    /**
     * Generate random paragraphs.
     *
     * @access public
     * @static
     * @param int $paragraphCount Number of paragraphs (default: 3)
     * @return array Paragraphs
     */
    public static function paragraphs($paragraphCount = 3)
    {
        $ret = array();
        for ($i = 0; $i < $paragraphCount; $i++) {
            $ret[] = self::paragraph();
        }
        return $ret;
    }
}
