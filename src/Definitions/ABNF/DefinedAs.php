<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('defined-as', new Concatenation(
    new VariableRepetition(new CWSP),
    new Alternatives(new TerminalValue('='), new TerminalValue('=/')),
    new VariableRepetition(new CWSP),
), '*c-wsp ("=" / "=/") *c-wsp') ]
final class DefinedAs implements DefinitionInterface
{

}