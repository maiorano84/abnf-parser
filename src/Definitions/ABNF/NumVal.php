<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\TerminalValue;

#[Definition('num-val', new Concatenation(
    new TerminalValue('%'),
    new Alternatives(new BinVal, new DecVal, new HexVal),
), '"%" (bin-val / dec-val / hex-val)')]
final class NumVal implements DefinitionInterface
{

}