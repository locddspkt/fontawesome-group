<?php


namespace FontAwesomeGroupHelper;

use PHPUnit\Framework\TestCase;
use Exception;


include_once __DIR__ . '/phpunit-autoloader.php';

class IconsFarClockPlus_Test extends TestCase {
    public function setUp() {
    }

    public function tearDown() {
    }

    private function checkBasic($iconHtml) {

        $this->assertContains('far fa-clock', $iconHtml, 'Has clock icon');
        $this->assertContains('fas fa-plus', $iconHtml, 'Has plus icon');
    }

    public function testIcon() {
        //default
        $iconHtml = (string)FaIcon::create('icons-far_clock_plus');
        $this->checkBasic($iconHtml);
        $this->assertContains('shrink-10', $iconHtml, 'Default value');
        $this->assertContains('up-6.8', $iconHtml, 'Default value');
        $this->assertContains('right-8', $iconHtml, 'Default value');

        //set shrink,up,right
        $shrink = TestUtils::getRandomText20(_0123456789);
        $up = TestUtils::getRandomText20(_0123456789);
        $right = TestUtils::getRandomText20(_0123456789);

        $iconHtml = (string)FaIcon::create('icons-far_clock_plus')
            ->set('fas_fa_plus_shrink',$shrink)
            ->set('fas_fa_plus_right', $right)
            ->set('fas_fa_plus_up', $up);
        $this->checkBasic($iconHtml);
        $this->assertContains("shrink-$shrink", $iconHtml, 'Custom value');
        $this->assertContains("up-$up", $iconHtml, 'Custom value');
        $this->assertContains("right-$right", $iconHtml, 'Custom value');
    }
}