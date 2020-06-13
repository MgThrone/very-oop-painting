<?php

namespace Painting\Canvas;

final class Composition implements iComposition
{
    private $items = [];

    /**
     * CanvasIComposition constructor.
     * @param array $items
     */
    private function __construct($items = []) {
        $this->items = $items;
    }

    public static function newEmpty() {
        return new self;
    }

    /**
     * @param Element $item
     * @return Composition
     */
    public function recreateWith(Element $item) {
        return new self(
            array_merge($this->items, [$item])
        );
    }

    /**
     * @param string $filePath
     */
    public function drawInto($image) {
        imagecolorallocate($image, 255,255,255);
        foreach($this->items as $item) {
            $item->drawSelfInto($image);
        }
    }
}