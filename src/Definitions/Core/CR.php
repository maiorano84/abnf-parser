<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('CR', new TerminalValue('\x0D'), '%x0D')]
final class CR implements DefinitionInterface
{

}