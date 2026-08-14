<?php

namespace Maiorano84\ABNF;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS)]
final class Definition
{
    private string $name;
    private GrammarInterface $grammar;
    private string $rule;

    public function __construct(string $name, GrammarInterface $grammar, string $rule)
    {
        $this->name = $name;
        $this->grammar = $grammar;
        $this->rule = $rule;
    }
}