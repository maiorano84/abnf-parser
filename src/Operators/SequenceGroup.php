<?php

namespace Maiorano84\ABNF\Operators;

use Maiorano84\ABNF\GrammarInterface;

final class SequenceGroup implements OperatorInterface
{
    private array $elements;
    public function __construct(GrammarInterface... $elements)
    {
        $this->elements = $elements;
    }
}