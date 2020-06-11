<?php

use Painting\Canvas\Canvas;
use Painting\Shapes\Circle;
use Painting\Shapes\Square;
use Painting\Shapes\Text;

require __DIR__ . '/vendor/autoload.php';

$canvas = new Canvas($sizeX = 800, $sizeY = 600);

Circle::newFromRadius(5)
    ->drawSelfOn($canvas, $posX = 0, $posY = 0, $colorName = 'red');

Square::newFromSideLength(9)
    ->drawSelfOn($canvas, $posX = 10, $posY = 10, $colorName = 'green');

Text::newFromContent('- This is your spine. - Wtf put it back!')
    ->drawSelfOn($canvas, $posX = 50, $posY = 50, $colorName = 'blue');

print_r($canvas);