<?php

namespace ZiaqEdu\Controller;
use ZiaqEdu\App\View;
use ZiaqEdu\Models\User;

class HomeController
{
    function index(): void 
    {
        $model = [
            "title" => "Ziaq Edu",
            "content" => "HAHAHHH",
            "data" => User::getAllUsers()
        ];

        View::render('pages/index', $model);
    }
}