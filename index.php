<?php

use Painting\Canvas\Canvas;
use Painting\Canvas\Color;
use Painting\Canvas\Element;
use Painting\Primitives\N;
use Painting\Shapes\Circle;
use Painting\Shapes\Square;
use Painting\Shapes\Text;

require __DIR__ . '/vendor/autoload.php';

Canvas::newWithEls(
    $sizeX = 700,
    $sizeY = 500,
    $elements = [
        new Element(
            Circle::newWithRadius(50),
            $posX = new N(50),
            $posY = new N(150),
            Color::newFromName('red')
        ),
        new Element(
            Square::newWithSideLength(90),
            $posX = new N(150),
            $posY = new N(150),
            Color::newFromName('green')
        ),
        new Element(
            Square::newWithSideLength(90),
            $posX = new N(50),
            $posY = new N(250),
            Color::newFromName('blue')
        ),
        new Element(
            new Text(
                $content = '- This is your spine. - Wtf put it back!',
                $fontFile = '/app/fonts/Raleway-Black.ttf',
                $fontSize = 25,
                $angle = 2
            ),
            $posX = new N(50),
            $posY = new N(100),
            Color::newFromName('blue')
        ),
        new Element(
            new Text(
                $content = 'Test text2!',
                $fontFile = '/app/fonts/Roboto-Black.ttf',
                $fontSize = 35,
                $angle = 45
            ),
            $posX = new N(300),
            $posY = new N(300),
            Color::newFromName('red')
        )
    ]
)->drawTo('/app/canvas.png');