<?php

namespace Maiorano84\ABNF\Definitions\ABNF\Rfc7405;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\OptionalSequence;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('case-insensitive-string', new Concatenation(
    new OptionalSequence(new TerminalValue('%i')),
    new QuotedString,
), '[ "%i" ] quoted-string')]
final class CaseInsensitiveString implements DefinitionInterface
{

}