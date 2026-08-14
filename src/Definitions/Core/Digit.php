<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('DIGIT', new TerminalValue('\x30', '\x39'), '%x30-39')]
final class Digit implements DefinitionInterface
{

}