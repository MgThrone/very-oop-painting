<?php

namespace Painting\Shapes;

use \Painting\Canvas\Canvas;

interface iShape
{
    public function drawSelfOn(Canvas $cv, $posX, $posY, $colorName);
}
