<?php

namespace Painting\Primitives;

class NTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiationZero() {
        $zero = new N(0);
        $this->assertSame(0, $zero->identify());
    }

    public function testInstantiationPositive() {
        $one = new N("1");
        $this->assertSame(1, $one->identify());
    }

    public function testInstantiationNegative() {
        $this->expectException(\InvalidArgumentException::class);
        new N(-1);
    }

    public function testBehavior() {
        $one = new N(1);
        $two = new N("2");
        $three = new N('3');
        $this->assertTrue($one->lessOrEqual($two));
        $this->assertTrue($three->lessOrEqual($three));
    }
}