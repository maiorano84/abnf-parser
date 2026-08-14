<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Operators\Concatenation as ConcatenationOperator;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\VariableRepetition;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('alternation', new ConcatenationOperator(
    new Concatenation,
    new VariableRepetition(
        new ConcatenationOperator(
            new VariableRepetition(new CWSP),
            new TerminalValue('/'),
            new VariableRepetition(new CWSP),
            new Concatenation,
        ),
    ),
), 'concatenation *(*c-wsp "/" *c-wsp concatenation)')]
final class Alternation implements DefinitionInterface
{

}