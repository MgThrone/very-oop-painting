<?php


namespace Painting\Canvas;


class CanvasArea
{
    /**
     * @var int
     */
    private $sizeX;

    /**
     * @var int
     */
    private $sizeY;

    /**
     * CanvasArea constructor.
     * @param int $sizeX
     * @param int $sizeY
     */
    public function __construct($sizeX, $sizeY) {
        settype($sizeX, 'int');
        settype($sizeY, 'int');

        if($sizeX < 0 || $sizeY < 0)
            throw new \Exception('Canvas Area size must be positive');

        $this->sizeX = $sizeX;
        $this->sizeY = $sizeY;
    }

    /**
     * @param int $pointX
     * @param int $pointY
     */
    public function ensureWithin($pointX, $pointY) {
        return $pointX <= $this->sizeX && $pointY <= $this->sizeY;
    }
}