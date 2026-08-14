<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\CRLF;
use Maiorano84\ABNF\Definitions\Core\VChar;
use Maiorano84\ABNF\Definitions\Core\WSP;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('comment', new Concatenation(
    new TerminalValue(';'),
    new VariableRepetition(new Alternatives(new WSP, new VChar)),
    new CRLF,
), '";" *(WSP / VCHAR) CRLF')]
final class Comment implements DefinitionInterface
{

}