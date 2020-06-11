<?php

namespace Painting\Canvas;

use Painting\Shapes\iShape;

final class Canvas
{
    /**
     * @var CanvasArea
     */
    private $area;

    /**
     * @var CanvasIComposition
     */
    private $composition;

    /**
     * Canvas constructor.
     * @param int $sizeX
     * @param int $sizeY
     */
    public function __construct($sizeX = 800, $sizeY = 600) {
        $this->area = new CanvasArea($sizeX, $sizeY);
        $this->composition = CanvasIComposition::newEmpty();
    }

    /**
     * @param iShape $shape
     * @param int $posX
     * @param int $posY
     * @param string $colorName
     */
    public function drawOne(iShape $shape, $posX, $posY, $colorName) {
        if($this->area->ensureWithin($posX, $posY)) {
            $this->composition = $this->composition->recreateWith(
                new CanvasItem($shape, $posX, $posY, $colorName)
            );
        }
    }
}