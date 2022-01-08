<?php

use PHPUnit\Framework\TestCase;

class PHPTest extends TestCase
{
    public function testPHPVersion()
    {
        $phpVersion = phpversion();

        $this->assertEquals("8.0.14", $phpVersion);
    }
}

?>