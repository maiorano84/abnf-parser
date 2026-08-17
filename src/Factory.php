<?php

namespace Maiorano84\ABNF;

final class Factory
{
    public static function rfc5234(): ParserInterface
    {
        // TODO: Implement factory method for standard ABNF Parser
    }

    public static function rfc7405(): ParserInterface
    {
        // TODO: Implement factory method for case sensitive ABNF Parser
    }

    public static function create(): ParserInterface
    {
        return self::rfc5234();
    }

    public static function createCaseSensitive(): ParserInterface
    {
        return self::rfc7405();
    }
}