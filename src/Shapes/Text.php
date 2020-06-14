<?php

namespace Painting\Shapes;

final class Text implements iShape
{
    private $content;

    private $fontFile;

    private $fontSize;

    private $angle;

    /**
     * Text constructor.
     * @param string $content
     * @param string $fontFile
     * @param int $fontSize
     * @param int $angle
     */
    public function __construct($content, $fontFile, $fontSize, $angle) {
        $this->content = (string) $content;
        $this->fontFile = (string) $fontFile;
        $this->fontSize = (int) $fontSize;
        $this->angle = (int) $angle;
    }

    public function drawSelfOn($image, $x, $y, $color) {
        imagettftext( $image , $this->fontSize, $this->angle, $x, $y, $color, $this->fontFile, $this->content );
    }
}