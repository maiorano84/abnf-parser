<?php

namespace Maiorano84\ABNF;

use Maiorano84\ABNF\Definitions\DefinitionInterface;
use Maiorano84\ABNF\Operators\OperatorInterface;

final class Parser
{
    /* private array $definitions;
    private array $operators;

    public function __construct(array $definitions = [], array $operators = [])
    {
        $this->addDefinitions($definitions);
        $this->addOperators($operators);
    }

    public function addDefinitions(array $definitions): void
    {
        foreach ($definitions as $definition) {
            $this->addDefinition($definition);
        }
    }

    public function addOperators(array $operators): void
    {
        foreach ($operators as $operator) {
            $this->addOperator($operator);
        }
    }

    public function addDefinition(DefinitionInterface $definition): void
    {
        $this->definitions[] = $definition;
    }

    public function addOperator(OperatorInterface $operator): void
    {
        $this->operators[] = $operator;
    }

    public function getDefinitions(): array
    {
        return $this->definitions;
    }

    public function getOperators(): array
    {
        return $this->operators;
    }

    public function setDefinitions(array $definitions): void
    {
        $this->definitions = [];
        $this->addDefinitions($definitions);
    }

    public function setOperators(array $operators): void
    {
        $this->operators = [];
        $this->addOperators($operators);
    } */
}