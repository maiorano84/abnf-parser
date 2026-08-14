<?php

namespace Maiorano84\ABNF\Definitions\Core;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('LWSP', new VariableRepetition(
    new Alternatives(new WSP, new Concatenation(new CRLF, new WSP))
), '*(WSP / CRLF WSP)')]
final class LWSP implements DefinitionInterface
{

}