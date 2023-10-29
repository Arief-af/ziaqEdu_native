<?php

namespace ZiaqEdu\Controller;
use ZiaqEdu\Controller\CourseController;
use ZiaqEdu\App\View;
use ZiaqEdu\Models\Category;

class Controller
{
    function login() : void {
        setcookie("auth", "true", time() + 3600, "/");
        header('Location: ' . '/courses');;
    }

    function logout() : void {
        setcookie("auth", "false", time() + 3600, "/");
    }
}