<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\HexDig;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\OptionalSequence;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;
#[Definition('hex-val', new Concatenation(
    new TerminalValue('x'),
    new VariableRepetition(new HexDig, 1),
    new OptionalSequence(
        new Alternatives(
            new VariableRepetition(new Concatenation(
                new TerminalValue('.'),
                new VariableRepetition(new HexDig, 1),
            )),
            new Concatenation(
                new TerminalValue('-'),
                new VariableRepetition(new HexDig, 1),
            ),
        ),
    ),
), '"x" 1*HEXDIG [ 1*("." 1*HEXDIG) / ("-" 1*HEXDIG) ]')]
final class HexVal implements DefinitionInterface
{

}