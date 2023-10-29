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
Router::add('POST', '/dashboard/course/store', DashboardController::class, 'courseStore');

Router::add('GET', '/dashboard/category', DashboardController::class, 'categoryAll');
Router::add('GET', '/dashboard/category/create', DashboardController::class, 'categoryCreate');
Router::add('GET', '/dashboard/category/edit', DashboardController::class, 'categoryEdit');
Router::add('POST', '/dashboard/category/store', DashboardController::class, 'categoryStore');
Router::add('POST', '/dashboard/category/delete', DashboardController::class, 'categoryDelete');
Router::add('POST', '/dashboard/category/update', DashboardController::class, 'categoryUpdate');


Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/courses', CourseController::class, 'index');
Router::add('GET', '/courses/show', CourseController::class, 'show');


Router::run();
