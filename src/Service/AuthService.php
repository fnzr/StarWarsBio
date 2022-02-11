<?php

namespace Sample\StarWarsBio\Service;

use Orkester\MVC\MService;

class AuthService extends MService
{

    public static function login(string $username, string $password): array
    {
        return ['token' => "{$username}_$password"];
    }

    public static function NonArrayReturn(): int
    {
        return 1;
    }

}
