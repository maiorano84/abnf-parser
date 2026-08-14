<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('prose-val', new Concatenation(
    new TerminalValue('<'),
    new VariableRepetition(new Alternatives(
        new TerminalValue('\x20', '\x3D'),
        new TerminalValue('\3F', '\x7E'),
    )),
    new TerminalValue('>'),
), '"<" *(%x20-3D / %x3F-7E) ">"')]
final class ProseVal implements DefinitionInterface
{

}