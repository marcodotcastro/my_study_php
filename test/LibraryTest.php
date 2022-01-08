<?php

use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase
{
    public function testLibraryVersion()
    {
        $libraryVersion = '0.0.1';

        $this->assertEquals('0.0.1', $libraryVersion);
    }
}

?>