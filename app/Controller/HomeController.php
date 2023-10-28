<?php

namespace ZiaqEdu\Controller;
use ZiaqEdu\App\View;
class HomeController
{
    function index(): void 
    {
        session_unset();
        $model = [
            "title" => "Ziaq Edu",
            "content" => "HAHAHHH"
        ];

        View::render('pages/index', $model);
    }
}