<?php

namespace Maiorano84\ABNF\Definitions\ABNF;

use Maiorano84\ABNF\Definition;
use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\Concatenation;
use Maiorano84\ABNF\Operators\OptionalSequence;

#[Definition('repetition', new Concatenation(
    new OptionalSequence(new Repeat),
    new Element,
), '[repeat] element')]
final class Repetition implements DefinitionInterface
{
    public function __construct()
    {
    }
}