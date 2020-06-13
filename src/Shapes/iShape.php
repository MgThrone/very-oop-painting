<?php

namespace Painting\Shapes;

use \Painting\Canvas\Canvas;

interface iShape
{
    public function putSelfOn(Canvas $cv, $posX, $posY, $colorName);

    public function drawSelfOn($image, $x, $y, $color);
}
