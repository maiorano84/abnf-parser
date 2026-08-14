<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('DQUOTE', new TerminalValue('\x22'), '%x22')]
final class DQuote implements DefinitionInterface
{

}