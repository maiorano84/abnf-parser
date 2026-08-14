<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\Bit;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\OptionalSequence;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('bin-val', new Concatenation(
    new TerminalValue('b'),
    new VariableRepetition(new Bit, 1),
    new OptionalSequence(
        new Alternatives(
            new VariableRepetition(new Concatenation(
                new TerminalValue('.'),
                new VariableRepetition(new Bit, 1),
            )),
            new Concatenation(
                new TerminalValue('-'),
                new VariableRepetition(new Bit, 1),
            ),
        ),
    ),
), '"b" 1*BIT [ 1*("." 1*BIT) / ("-" 1*BIT) ]')]
final class BinVal implements DefinitionInterface
{

}