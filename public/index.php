<?php
require_once __DIR__ . '/../vendor/autoload.php';

use ZiaqEdu\Controller\DashboardController;
use ZiaqEdu\App\Router;
use ZiaqEdu\Controller\HomeController;
use ZiaqEdu\Controller\CourseController;
use ZiaqEdu\Models\Model;


$mysqli = new mysqli('localhost', 'ziaq', 'nolepngoding', 'ziaqEduNative');

if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
Model::setDB($mysqli);
Router::add('GET', '/dashboard', DashboardController::class, 'index');
Router::add('GET', '/dashboard/course', DashboardController::class, 'courseAll');
Router::add('GET', '/dashboard/course/create', DashboardController::class, 'courseCreate');
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/courses', CourseController::class, 'index');
Router::add('GET', '/courses/show', CourseController::class, 'show');


Router::run();
