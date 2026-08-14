<?php

namespace Maiorano84\ABNF\Operators;

use Maiorano84\ABNF\GrammarInterface;

final class OptionalSequence implements OperatorInterface
{
    private GrammarInterface $element;
    public function __construct(GrammarInterface $element)
    {
        $this->element = $element;
    }
}