<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\Core\DQuote;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\TerminalValue;
use Maiorano84\ABNF\Operators\VariableRepetition;

#[Definition('char-val', new Concatenation(
    new DQuote,
    new VariableRepetition(new Alternatives(
        new TerminalValue('\x20', '\x21'),
        new TerminalValue('\x23', '\x7E'),
    )),
    new DQuote,
), 'DQUOTE *(%x20-21 / %x23-7E) DQUOTE')]
final class CharVal implements DefinitionInterface
{

}