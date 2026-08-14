<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\Digit;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('repeat', new Alternatives(
    new VariableRepetition(new Digit, 1),
    new Concatenation(
        new VariableRepetition(new Digit),
        new TerminalValue('*'),
        new VariableRepetition(new Digit),
    )
), '1*DIGIT / (*DIGIT "*" *DIGIT)')]
final class Repeat implements DefinitionInterface
{

}