<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;

#[Definition('CRLF', new Concatenation(new CR, new LF), 'CR LF')]
final class CRLF implements DefinitionInterface
{

}