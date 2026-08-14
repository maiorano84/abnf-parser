<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\Alpha;
use Maiorano84\ABNF\Definitions\Core\Digit;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('rulename', new Concatenation(
    new Alpha,
    new VariableRepetition(new Alternatives(
        new Alpha,
        new Digit,
        new TerminalValue('-'),
    )),
), 'ALPHA *(ALPHA / DIGIT / "-")')]
final class RuleName implements DefinitionInterface
{

}