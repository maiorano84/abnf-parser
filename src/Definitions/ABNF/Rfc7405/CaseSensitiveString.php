<?php

namespace Maiorano84\ABNF\Definitions\ABNF\Rfc7405;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('case-sensitive-string', new Concatenation(
    new TerminalValue('%s'),
    new QuotedString,
), '"%s" quoted-string')]
final class CaseSensitiveString implements DefinitionInterface
{

}