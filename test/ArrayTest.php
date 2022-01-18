<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    public function testArrayPush()
    {
        $cesta = array("laranja", "morango");

        $result = array_push($cesta, "melancia", "batata");

        $this->assertEquals(array("laranja", "morango", "melancia", "batata"), $cesta);
    }

    public function testArrayDiff()
    {
        $array1 = array("a" => "verde", "vermelho", "azul", "vermelho");
        $array2 = array("b" => "verde", "amarelo", "vermelho");

        $result = array_diff($array1, $array2);

        $this->assertEquals(array(1 => "azul"), $result);

    }

    public function testArrayReplace()
    {
        $base = array("orange", "banana", "apple", "raspberry");
        $replacements1 = array(0 => "pineapple", 4 => "cherry");
        $replacements2 = array(0 => "grape");

        $basket = array_replace($base, $replacements1, $replacements2);

        $this->assertEquals(array(0 => "grape", 1 => "banana", 2 => 'apple', 3 => "raspberry", 4 => 'cherry'), $basket);

    }

    public function testArrayKeys()
    {
        $array = array(0 => 100, "cor" => "vermelho");
        $result = array_keys($array);
        $this->assertEquals(array(0, 'cor'), $result);

        $array = array("cor" => array("azul", "vermelho", "verde"), "tamanho" => array("pequeno", "medio", "grande"));
        $result = array_keys($array);
        $this->assertEquals(array(0 => 'cor', 1 => 'tamanho'), $result);
    }
}

?>