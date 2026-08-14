<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('CTL', new Alternatives(
    new TerminalValue('\x00', '\x1F'),
    new TerminalValue('\x7F'),
), '%x00-1F / %x7F')]
final class Ctl implements DefinitionInterface
{

}