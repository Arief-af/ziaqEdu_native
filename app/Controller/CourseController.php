<?php

namespace ZiaqEdu\Controller;
use ZiaqEdu\App\View;
use ZiaqEdu\Models\Category;
use ZiaqEdu\Models\Course;

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
        $data = Course::getAllCourse();
        $model = [
            "title" => "Ziaq Edu",
            "video" => $data['video'],
            "lists" => $data['lists']
        ];
        // print_r($model['lists']);
        View::render('pages/course/show', $model);
    }
}