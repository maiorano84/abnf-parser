<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('CHAR', new TerminalValue('\x01', '\x7F'), '%x01-7F')]
final class Char implements DefinitionInterface
{

}