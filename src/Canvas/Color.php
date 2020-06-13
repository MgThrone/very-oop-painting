<?php

namespace Painting\Canvas;

class Color
{
    private $value;

    private function __construct($value)
    {
        $this->value = $value;
    }

    public static function fromName($name) {
        return new self($name);
    }

    public function red() {
        if($this->value == 'red')
            return 255;
        return 0;
    }

    public function green() {
        if($this->value == 'green')
            return 128;
        return 0;
    }

    public function blue() {
        if($this->value == 'blue')
            return 255;
        return 0;
    }
}