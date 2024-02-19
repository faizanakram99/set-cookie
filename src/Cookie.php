<?php

namespace Gounsch;

class Cookie
{
    public static function generate(string $name, string $value, int $validity): string
    {
        return sprintf(
            "Set-Cookie: %s=%s; expires=%s; path=/; secure=true; HttpOnly; SameSite=Lax",
            rawurlencode($name),
            rawurlencode($value),
            gmdate('D, d M Y H:i:s T', time() + $validity),
        );
    }
}