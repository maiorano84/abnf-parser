<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;

#[Definition('rule', new Concatenation(
    new Rulename,
    new DefinedAs,
    new Elements,
    new CNL,
), 'rulename defined-as elements c-nl')]
final class Rule implements DefinitionInterface
{

}