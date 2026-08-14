<?php

namespace Maiorano84\ABNF\Operators;

use Maiorano84\ABNF\GrammarInterface;

final class SpecificRepetition extends Repetition implements OperatorInterface
{
    private GrammarInterface $element;
    public function __construct(GrammarInterface $element, int $count = 0)
    {
        parent::__construct($count, $count);
        $this->element = $element;
    }
}