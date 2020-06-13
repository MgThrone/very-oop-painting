<?php

namespace Painting\Canvas;

use Painting\Primitives\N;
use Painting\Shapes\iShape;

final class Element
{
    /**
     * @var iShape
     */
    private $shape;

    /**
     * @var N
     */
    private $posX;

    /**
     * @var N
     */
    private $posY;

    /**
     * @var Color
     */
    private $color;

    /**
     * Element constructor.
     * @param iShape $shape
     * @param N $posX
     * @param N $posY
     * @param Color $color
     */
    public function __construct(iShape $shape, $posX, $posY, $color) {
        $this->shape = $shape;
        $this->posX = $posX;
        $this->posY = $posY;
        $this->color = $color;
    }

    public function drawSelfInto($image) {
        $color = imagecolorallocate(
            $image,
            $this->color->red(),
            $this->color->green(),
            $this->color->blue()
        );
        $this->shape->drawSelfOn($image, $this->posX->identify(), $this->posY->identify(), $color);
    }
}