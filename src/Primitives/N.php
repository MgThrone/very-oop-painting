<?php

namespace Painting\Primitives;

/**
 * Class N
 * Positive integer. Natural number in mathematics [0, 1, 2, ...]
 * @package Painting\Primitives
 */
final class N implements MathN
{
    /**
     * @var int
     */
    private $identity;

    /**
     * N constructor.
     * @param int $value
     * @throws \InvalidArgumentException
     */
    public function __construct($value){
        settype($value, 'int');
        if($value < 0)
            throw new \InvalidArgumentException('N must be >= 0');
        $this->identity = $value;
    }

    /**
     * @param MathN $other
     * @return bool
     */
    public function lessOrEqual(MathN $other) {
        return $this->identity <= $other->identify();
    }

    /**
     * @return int
     */
    public function identify() {
        return $this->identity;
    }
}