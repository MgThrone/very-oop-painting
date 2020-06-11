<?php

namespace Painting\Shapes;

final class Square extends Shape
{
    /**
     * @var float $sideLength
     */
    private $sideLength;

    /**
     * Circle constructor.
     * @param float $sideLength
     */
    private function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public static function newFromSideLength($value) {
        return new self($value);
    }
}