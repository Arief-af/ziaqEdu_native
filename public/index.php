<?php
require_once __DIR__ . '/../vendor/autoload.php';

use ZiaqEdu\App\Router;
use ZiaqEdu\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');

Router::run();
