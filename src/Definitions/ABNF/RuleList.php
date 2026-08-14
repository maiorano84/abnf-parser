<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Operators\Alternatives;
use Maiorano84\ABNF\Operators\VariableRepetition;
use Maiorano84\ABNF\Operators\Concatenation;

#[Definition('rulelist', new VariableRepetition(new Alternatives(
    new Rule,
    new Concatenation(
        new VariableRepetition(new CWSP),
        new CNL,
    ),
), 1), '1*( rule / (*c-wsp c-nl) )')]
final class RuleList
{

}