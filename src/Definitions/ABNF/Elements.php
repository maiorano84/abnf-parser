<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('elements', new Concatenation(
    new Alternation,
    new VariableRepetition(new CWSP),
), 'alternation *c-wsp)')]
final class Elements implements DefinitionInterface
{

}