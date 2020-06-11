<?php

namespace Painting\Canvas;

interface iComposition
{
    public function recreateWith(CanvasItem $element);
}
