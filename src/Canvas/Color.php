<?php

namespace Painting\Canvas;

class Color
{
    /**
     * @var string
     */
    private $name;

    /**
     * Color constructor.
     * @param string $name
     */
    private function __construct($name) {
        $this->name = $name;
    }

    public static function newFromName($name) {
        return new self($name);
    }

    public function red() {
        if($this->name == 'red')
            return 255;
        return 0;
    }

    public function green() {
        if($this->name == 'green')
            return 128;
        return 0;
    }

    public function blue() {
        if($this->name == 'blue')
            return 255;
        return 0;
    }
}