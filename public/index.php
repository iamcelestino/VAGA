<?php
session_start();
require __DIR__ . '/../App/core/config.php';
require __DIR__ . '/../App/core/helpers.php';
require __DIR__ . '/../vendor/autoload.php';

use App\Core\App;

$app = new App();
