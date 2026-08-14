<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('BIT', new Alternatives(
    new TerminalValue('0'),
    new TerminalValue('1'),
), '"0" / "1"')]
final class Bit implements DefinitionInterface
{

}