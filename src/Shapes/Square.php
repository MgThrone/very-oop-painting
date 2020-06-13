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

    public static function newWithSideLength($value) {
        return new self($value);
    }

    public function drawSelfOn($image, $x1, $y1, $color) {
        imagefilledrectangle($image, $x1, $y1, $this->p2($x1), $this->p2($y1), $color);
    }

    private function p2($point1) {
        return $this->sideLength + $point1;
    }
}