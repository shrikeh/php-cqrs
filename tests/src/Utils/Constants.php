<?php

declare(strict_types=1);

namespace Tests\Utils;

final readonly class Constants
{
    public const int ROOT_DIR_LEVELS = 3;

    public static function rootDir(): string
    {
        return dirname(__DIR__, self::ROOT_DIR_LEVELS);
    }

    public static function testsDir(): string
    {
        return self::rootDir() . '/tests';
    }

    public static function buildDir(): string
    {
        return $_ENV['APP_BUILD_DIR'] ?? self::rootDir() . '/.build';
    }

    public static function srcDir(): string
    {
        return self::rootDir() . '/src';
    }

    public static function fixturesDir(): string
    {
        return self::testsDir() . '/fixtures';
    }

    public static function vendorDir(): string
    {
        return self::rootDir() . '/vendor';
    }

    public static function tempDir(): string
    {
        return self::buildDir() . '/temp';
    }
}
