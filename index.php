<?php

use Painting\Canvas\Canvas;
use Painting\Shapes\Circle;
use Painting\Shapes\Square;
use Painting\Shapes\Text;

require __DIR__ . '/vendor/autoload.php';

$canvas = new Canvas;

Circle::newWithRadius(50)
    ->putSelfOn($canvas, $posX = 100, $posY = 100, $colorName = 'red');

Square::newWithSideLength(90)
    ->putSelfOn($canvas, $posX = 200, $posY = 200, $colorName = 'green');

Text::newWithContent('- This is your spine. - Wtf put it back!')
    ->putSelfOn($canvas, $posX = 50, $posY = 50, $colorName = 'blue');

$canvas->draw('/app/canvas.png');