<?php

namespace Painting\Shapes;

use Painting\Canvas\Canvas;

abstract class Shape implements iShape
{
    public function drawSelfOn(Canvas $cv, $posX, $posY, $colorName) {
        $cv->drawOne($this, $posX, $posY, $colorName);
    }
}