<?php


namespace FontAwesomeGroupHelper;


use PHPUnit\Framework\TestCase;
use Exception;


include_once __DIR__ . '/phpunit-autoloader.php';

class FontAwesomeGroupHelper_Basic_Test extends TestCase {
    public function setUp() {
    }

    public function tearDown() {
    }

    public function testAny() {
        $this->assertEquals(true,true,'Basic test');
    }
}