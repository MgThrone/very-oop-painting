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

    public static function newFromRadius($value) {
        return new self($value);
    }
}