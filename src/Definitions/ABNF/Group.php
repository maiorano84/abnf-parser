<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('group', new Concatenation(
    new TerminalValue('('),
    new VariableRepetition(new CWSP),
    new Alternation,
    new VariableRepetition(new CWSP),
    new TerminalValue(')'),
), '"(" *c-wsp alternation *c-wsp ")"')]
final class Group implements DefinitionInterface
{

}