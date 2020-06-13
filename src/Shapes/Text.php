<?php


namespace Painting\Shapes;


final class Text extends Shape
{
    private $content;

    private function __construct($c)
    {
        $this->content = (string) $c;
    }

    public static function newWithContent($c) {
        return new self($c);
    }

    public function drawSelfOn($image, $x, $y, $color) {
        \imagettftext( $image , $size = 20 , $angle = 0, $x , $y , $color , $fontFile = '/app/Pacifico.ttf' , $this->content );
    }
}