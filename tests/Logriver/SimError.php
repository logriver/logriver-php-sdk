<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 0);

require(__DIR__.'/../bootstrap.php');

$client = \Logriver\Client::init('12345baced3340aa940fc402e652d30d');
$client->setDebugMode(1);
$client->startListener();

trigger_error("test real error", E_USER_ERROR);
