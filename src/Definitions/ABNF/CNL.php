<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\CRLF;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;

#[Definition('c-nl', new Alternatives(new Comment, new CRLF), 'comment / CRLF')]
final class CNL implements DefinitionInterface
{

}