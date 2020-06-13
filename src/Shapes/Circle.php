<?php

namespace Painting\Shapes;

final class Circle extends Shape
{
    /**
     * @var float
     */
    private $radius;

    /**
     * Circle constructor.
     * @param float $radius
     */
    private function __construct($radius) {
        $this->radius = $radius;
    }

    public static function newWithRadius($value) {
        return new self($value);
    }

    public function drawSelfOn($image, $x, $y, $color) {
        imagefilledellipse($image, $x, $y, $this->diam(), $this->diam(), $color);
    }

    private function diam() {
        return $this->radius * 2;
    }
}