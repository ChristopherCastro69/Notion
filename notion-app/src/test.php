<?php

require "vendor/autoload.php";

use Notion\Notion;

$token = "ssecret_xZW9nTLtsHOBRewB9csgsAxXRXekjvB1bFCkngwXPrv";
$notion = Notion::create($token);

$users = $notion->users()->findAll();

foreach ($users as $user) {
    echo $user->name . PHP_EOL;
}
