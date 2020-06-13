<?php

namespace Painting\Shapes;

use Painting\Canvas\Canvas;

abstract class Shape implements iShape
{
    public function putSelfOn(Canvas $cv, $posX, $posY, $colorName) {
        $cv->putOne($this, $posX, $posY, $colorName);
    }
}