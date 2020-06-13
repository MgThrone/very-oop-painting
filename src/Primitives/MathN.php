<?php

namespace Painting\Primitives;

interface MathN
{
    /**
     * @param MathN $other
     * return bool
     */
    public function lessOrEqual(MathN $other);

    /**
     * @return int
     */
    public function identify();
}