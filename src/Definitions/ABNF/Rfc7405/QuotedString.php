<?php

namespace Maiorano84\ABNF\Definitions\ABNF\Rfc7405;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\ABNF\CharVal;
use Maiorano84\ABNF\Definitions\DefinitionInterface;

#[Definition('quoted-string', new CharVal, 'DQUOTE *(%x20-21 / %x23-7E) DQUOTE')]
final class QuotedString implements DefinitionInterface
{

}