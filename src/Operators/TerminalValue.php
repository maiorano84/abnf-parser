<?php

namespace Maiorano84\ABNF\Operators;

final class TerminalValue implements OperatorInterface
{
    private string $value;
    private ?string $rangeEnd;
    public function __construct(string $value, ?string $rangeEnd = null)
    {
        $this->value = $value;
        $this->rangeEnd = $rangeEnd;
    }
}