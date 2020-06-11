<?php

namespace Painting\Canvas;

final class CanvasComposition implements iComposition
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
     * @param CanvasItem $item
     * @return CanvasComposition
     */
    public function recreateWith(CanvasItem $item) {
        return new self(
            array_merge($this->items, [$item])
        );
    }
}