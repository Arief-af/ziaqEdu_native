<?php

namespace ZiaqEdu\Controller;
use ZiaqEdu\App\View;
use ZiaqEdu\Models\Category;
class CourseController
{
    function index(): void 
    {
        session_unset();
        $model = [
            "title" => "Ziaq Edu",
            "data" => Category::getAllCategory()
        ];

        View::render('pages/course/index', $model);
    }

    function show(): void
    {
        $model = [
            "title" => "Ziaq Edu",
            "content" => "HAHAHHH"
        ];
        View::render('pages/course/show', $model);
    }
}