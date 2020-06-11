<?php


namespace Painting\Shapes;


final class Text extends Shape
{
    private $content;

    private function __construct($c)
    {
        $this->content = (string) $c;
    }

    public static function newFromContent($c) {
        return new self($c);
    }
}