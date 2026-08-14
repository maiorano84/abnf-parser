<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation as ConcatenationOperator;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('concatenation', new ConcatenationOperator(
    new Repetition,
    new VariableRepetition(new ConcatenationOperator(
        new VariableRepetition(new CWSP, 1),
        new Repetition,
    ))
), 'repetition *(1*c-wsp repetition)')]
final class Concatenation implements DefinitionInterface
{

}