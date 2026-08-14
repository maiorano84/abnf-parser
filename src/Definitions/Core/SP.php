<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('SP', new TerminalValue('\x20'), '%x20')]
final class SP implements DefinitionInterface
{

}