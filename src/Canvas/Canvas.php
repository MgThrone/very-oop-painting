<?php

namespace Painting\Canvas;

use Painting\Primitives\N;
use Painting\Shapes\iShape;

final class Canvas
{
    /**
     * @var Area
     */
    private $area;

    /**
     * @var Composition
     */
    private $composition;

    /**
     * Canvas constructor.
     * @param int $sizeX
     * @param int $sizeY
     */
    public function __construct($sizeX = 800, $sizeY = 600) {
        $this->area = new Area($sizeX, $sizeY);
        $this->composition = Composition::newEmpty();
    }

    /**
     * @param iShape $shape
     * @param int $posX
     * @param int $posY
     * @param string $colorName
     */
    public function putOne(iShape $shape, $posX, $posY, $colorName) {
        $posX = new N($posX);
        $posY = new N($posY);
        if($this->area->ensureContains( $posX, $posY )) {
            $this->composition = $this->composition->recreateWith(
                new Element($shape, $posX, $posY, Color::fromName($colorName))
            );
        }
    }

    /**
     * @param string $filePath
     */
    public function draw($filePath) {
        $img = imageCreate($this->area->sizeX()->identify(),$this->area->sizeY()->identify());
        $this->composition->drawInto($img);
        imagepng($img, $filePath);
    }
}