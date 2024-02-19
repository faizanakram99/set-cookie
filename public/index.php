<?php

use Gounsch\Cookie;

require dirname(__DIR__).'/vendor/autoload.php';

if ($_GET['logout'] ?? false) {
    // implement this.

    header('Location: /');
    exit();
}

if ($_GET['login'] ?? false) {
    header(
        Cookie::generate(
            'yakdam',
            \rtrim(\strtr(\base64_encode(\random_bytes(32)), '+/', '-_'), '='),
            3600 * 24
        ),
        false,
    );

    header('Location: /');

    exit();
}

if (!isset($_COOKIE['yakdam'])) {
    echo 'Click <a href="/?login=now">here</a> to login.';
    exit();
}

echo "User is logged in. Click <a href='/?logout=now'>here</a> to logout.";





