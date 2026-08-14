<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('OCTET', new TerminalValue('\x00', '\xFF'), '%x00-FF')]
final class Octet implements DefinitionInterface
{

}