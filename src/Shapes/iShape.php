<?php

namespace Painting\Shapes;

interface iShape
{
    public function drawSelfOn($image, $x, $y, $color);
}
