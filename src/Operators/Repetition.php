<?php

namespace Maiorano84\ABNF\Operators;

use Maiorano84\ABNF\GrammarInterface;

abstract class Repetition
{
    protected int $min;
    protected ?int $max;
    public function __construct(int $min = 0, ?int $max = null)
    {
        $this->min = $min;
        $this->max = $max;
    }
}