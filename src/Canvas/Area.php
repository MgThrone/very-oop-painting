<?php

namespace Painting\Canvas;

use Painting\Primitives\N;

class Area
{
    /**
     * @var N
     */
    private $sizeX;

    /**
     * @var N
     */
    private $sizeY;

    /**
     * Area constructor.
     * @param int $sizeX
     * @param int $sizeY
     */
    public function __construct($sizeX, $sizeY) {
        $this->sizeX = new N($sizeX);
        $this->sizeY = new N($sizeY);
    }

    /**
     * @param N $posX
     * @param N $posY
     */
    public function ensureContains(N $posX, N $posY) {
        return $posX->lessOrEqual($this->sizeX) && $posY->lessOrEqual($this->sizeY);
    }

    public function sizeX() {
        return $this->sizeX;
    }

    public function sizeY() {
        return $this->sizeY;
    }
}