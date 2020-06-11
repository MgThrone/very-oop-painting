<?php

namespace Painting\Canvas;

use Painting\Shapes\iShape;

final class CanvasItem
{
    /**
     * @var iShape
     */
    private $shape;

    /**
     * @var int
     */
    private $posX;

    /**
     * @var int
     */
    private $posY;

    /**
     * @var string
     */
    private $colorName;

    /**
     * CanvasItem constructor.
     * @param iShape $shape
     * @param int $x
     * @param int $y
     * @param string $colorName
     */
    public function __construct(iShape $shape, $x, $y, $colorName) {
        $this->shape = $shape;
        $this->posX = $x;
        $this->posY = $y;
        $this->colorName = $colorName;
    }
}