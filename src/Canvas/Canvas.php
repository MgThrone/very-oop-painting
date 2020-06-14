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
    private function __construct($sizeX, $sizeY, Composition $comp) {
        $this->area = new Area($sizeX, $sizeY);
        $this->composition = $comp;
    }

    public static function newEmpty($sizeX = 800, $sizeY = 600) {
        return new self($sizeX, $sizeY, Composition::newEmpty());
    }

    /**
     * @param int $sizeX
     * @param int $sizeY
     * @param array $items
     * @return Canvas
     */
    public static function newWithEls($sizeX = 800, $sizeY = 600, $items = []) {
        return new self($sizeX, $sizeY, Composition::newFromArray($items));
    }

    /**
     * @param iShape $shape
     * @param int $posX
     * @param int $posY
     * @param Color $color
     */
    public function putOne(iShape $shape, $posX, $posY, Color $color) {
        $posX = new N($posX);
        $posY = new N($posY);
        if($this->area->ensureContains( $posX, $posY )) {
            $this->composition = $this->composition->recreateWith(
                new Element($shape, $posX, $posY, $color)
            );
        }
    }

    /**
     * @param string $filePath
     */
    public function drawTo($filePath) {
        $img = imageCreate($this->area->sizeX()->identify(),$this->area->sizeY()->identify());
        $white = imagecolorallocate($img, 255,255,255);
        $this->composition->drawInto($img);

        imagepng($img, $filePath);
    }
}