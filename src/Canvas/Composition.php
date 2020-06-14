<?php

namespace Painting\Canvas;

final class Composition implements iComposition
{
    private $items = [];

    /**
     * CanvasIComposition constructor.
     * @param Element[] $items
     */
    private function __construct($items = []) {
        $this->items = $items;
    }

    public static function newEmpty() {
        return new self;
    }

    /**
     * @param array $elements
     * @return Composition
     */
    public static function newFromArray(array $elements) {
        return new self($elements);
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
     * @param string $image
     */
    public function drawInto($image) {
        foreach($this->items as $item) {
            $item->drawSelfInto($image);
        }
    }
}