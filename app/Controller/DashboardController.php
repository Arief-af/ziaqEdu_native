<?php

namespace ZiaqEdu\Controller;
use ZiaqEdu\App\View;

class DashboardController
{
    function index(): void 
    {
        session_start();
        $_SESSION["auth"] = true;
        $model = [
            "title" => "Ziaq Edu",
            "content" => "HAHAHHH",
            "page" => "admin"
        ];

        View::render('pages/dashboard/index', $model);
    }

    function courseAll(): void 
    {
        session_start();
        $_SESSION["auth"] = true;
        $model = [
            "title" => "Ziaq Edu",
            "content" => "HAHAHHH",
            "page" => "admin"
        ];

        View::render('pages/dashboard/course/index', $model);
    }

    function courseCreate(): void 
    {
        session_start();
        $_SESSION["auth"] = true;
        $model = [
            "title" => "Ziaq Edu",
            "content" => "HAHAHHH",
            "page" => "admin"
        ];

        View::render('pages/dashboard/course/create', $model);
    }
}