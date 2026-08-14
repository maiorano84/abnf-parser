<?php

namespace Maiorano84\ABNF\Operators;

use Maiorano84\ABNF\GrammarInterface;

final class VariableRepetition extends Repetition implements OperatorInterface
{
    private GrammarInterface $element;
    public function __construct(GrammarInterface $element, int $min = 0, ?int $max = null)
    {
        parent::__construct($min, $max);
        $this->element = $element;
    }
}