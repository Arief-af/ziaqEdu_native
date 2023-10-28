<?php
require_once __DIR__ . '/../vendor/autoload.php';

use ZiaqEdu\App\Router;
use ZiaqEdu\Controller\HomeController;
use ZiaqEdu\Controller\CourseController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/courses', CourseController::class, 'index');

Router::run();
