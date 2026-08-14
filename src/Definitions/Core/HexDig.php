<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('HEXDIG', new Alternatives(
    new Digit,
    new TerminalValue('A', 'F'),
), 'DIGIT / "A" / "B" / "C" / "D" / "E" / "F"')]
final class HexDig implements DefinitionInterface
{

}