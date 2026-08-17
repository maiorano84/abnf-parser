<?php

namespace Maiorano84\ABNF\Definitions\ABNF\Rfc7405;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;

#[Definition('CHARVAL', new Alternatives(
    new CaseInsensitiveString,
    new CaseSensitiveString,
), 'case-insensitive-string / case-sensitive-string')]
final class CharVal implements DefinitionInterface
{

}