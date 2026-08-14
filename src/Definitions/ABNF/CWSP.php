<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\WSP;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;

#[Definition('c-wsp', new Alternatives(
    new WSP,
    new Concatenation(new CNL, new WSP),
), 'WSP / (c-nl WSP)')]
final class CWSP implements DefinitionInterface
{

}