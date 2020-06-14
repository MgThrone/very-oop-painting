<?php

namespace Painting\Primitives;

class NTest extends \PHPUnit\Framework\TestCase
{
    public function testInstantiationZero() {
        $this->assertSame(
            0,
            ( new N(0) )->identify()
        );
    }

    public function testInstantiationPositive() {
        $this->assertSame(
            1,
            ( new N("1") )->identify()
        );
    }

    public function testInstantiationNegative() {
        $this->expectException(\InvalidArgumentException::class);
        new N(-1);
    }

    public function testLessBehavior() {
        $this->assertTrue(
            ( new N(1) )->lessOrEqual(
                new N("2")
            )
        );
    }

    public function testEqualBehavior() {
        $this->assertTrue(
            ( new N(3) )->lessOrEqual(
                new N('3')
            )
        );
    }
}