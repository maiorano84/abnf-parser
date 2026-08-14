<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;

#[Definition('WSP', new Alternatives(new SP, new HTAB), 'SP / HTAB')]
final class WSP implements DefinitionInterface
{

}