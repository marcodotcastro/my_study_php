<?php

use PHPUnit\Framework\TestCase;

class StringTest extends TestCase
{
    public function testStrReplace()
    {
        $bodyTag = str_replace("%body%", "black", "<body text='%body%'>");
        $this->assertEquals("<body text='black'>", $bodyTag);

        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyConsonants = str_replace($vowels, "", "Hello World of PHP");
        $this->assertEquals("Hll Wrld f PHP", $onlyConsonants);

        $phrase = "You should eat fruits, vegetables, and fiber every day.";
        $healthy = array("fruits", "vegetables", "fiber");
        $yummy = array("pizza", "beer", "ice cream");
        $newPhrase = str_replace($healthy, $yummy, $phrase);
        $this->assertEquals("You should eat pizza, beer, and ice cream every day.", $newPhrase);

        str_replace("ll", "", "good golly miss molly!", $count);
        $this->assertEquals(2, $count);
    }

    public function testStrContains()
    {
        $string = 'The lazy fox jumped over the fence';

        $result = str_contains($string, 'lazy');

        $this->assertEquals(true, $result);
    }

    public function testSimilarText()
    {
        similar_text('abcdef', 'fedcba', $perc);

        $this->assertEquals(16.666666666666668, $perc);
    }

    public function testStrTr()
    {
        $result1 = strtr("baab", "ab", "01");
        $this->assertEquals("1001", $result1);

        $trans = array("ab" => "01");
        $result2 = strtr("baab", $trans);
        $this->assertEquals("ba01", $result2);
    }
}

?>