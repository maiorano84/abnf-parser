<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Alternatives;

#[Definition('element', new Alternatives(
    new Rulename,
    new Group,
    new Option,
    new CharVal,
    new NumVal,
    new ProseVal,
), 'rulename / group / option / char-val / num-val / prose-val')]
final class Element implements DefinitionInterface
{

}