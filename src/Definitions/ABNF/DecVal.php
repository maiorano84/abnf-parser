<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\Digit;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\OptionalSequence;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('dec-val', new Concatenation(
    new TerminalValue('d'),
    new VariableRepetition(new Digit, 1),
    new OptionalSequence(
        new Alternatives(
            new VariableRepetition(new Concatenation(
                new TerminalValue('.'),
                new VariableRepetition(new Digit, 1),
            )),
            new Concatenation(
                new TerminalValue('-'),
                new VariableRepetition(new Digit, 1),
            ),
        ),
    ),
), '"d" 1*DIGIT [ 1*("." 1*DIGIT) / ("-" 1*DIGIT) ]')]
final class DecVal implements DefinitionInterface
{

}