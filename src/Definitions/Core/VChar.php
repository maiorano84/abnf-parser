<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('VCHAR', new TerminalValue('\x21', '\x7E'), '%x21-7E')]
final class VChar implements DefinitionInterface
{

}