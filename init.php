<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$googleSiteKey = $_ENV['GOOGLE_SITE_KEY'];

dump(["$googleSiteKey", $googleSiteKey ]);
