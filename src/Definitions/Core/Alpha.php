<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('ALPHA', new Alternatives(
    new TerminalValue('\x41', '\x5A'),
    new TerminalValue('\x61', '\x7A'),
), '%x41-5A / %x61-7A')]
final class Alpha implements DefinitionInterface
{

}