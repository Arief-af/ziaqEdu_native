<?php

namespace ZiaqEdu\Controller;

use ZiaqEdu\App\View;
use ZiaqEdu\Models\Category;
use ZiaqEdu\Models\Course;

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
            "data" => Course::index(),
            "page" => "admin"
        ];

        View::render('pages/dashboard/course/index', $model);
    }

    function courseCreate(): void
    {
        session_start();
        $_SESSION["auth"] = true;
        $model = [
            "title" => "Course Create",
            "categories" => Category::getAllCategory(),
            "page" => "admin"
        ];

        View::render('pages/dashboard/course/create', $model);
    }

    function checker($data, $tempName)
    {
        $nameRandom = rand();
        $name = $nameRandom . basename($data);
        $target_dir = 'storage/courses/' . $nameRandom;
        $target_file = $target_dir . basename($data);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $uploadOk = 1;

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "mp4"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF, mp4 files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            die('fail');
        } else {
            if (move_uploaded_file($tempName, $target_file)) {
                return $name;
            } else {
                die("Sorry, there was an error uploading your file.");
            }
        }
    }

    function courseStore(): void
    {
        
        $thumbnail = $this->checker($_FILES['thumbnail']["name"], $_FILES['thumbnail']["tmp_name"]);
        $video = $this->checker($_FILES['video']["name"], $_FILES['video']["tmp_name"]);
        Course::store($thumbnail, $video);
        header('Location: ' . '/dashboard/course');;
    }

    function categoryAll(): void
    {
        session_start();
        $_SESSION["auth"] = true;
        $model = [
            "title" => "Ziaq Edu",
            "data" => Category::getAllCategory(),
            "page" => "admin"
        ];

        View::render('pages/dashboard/category/index', $model);
    }

    function categoryCreate(): void
    {
        session_start();
        $_SESSION["auth"] = true;

        $model = [
            "title" => "Category - Create",
            "data" => Category::getAllCategory(),
            "page" => "admin"
        ];

        View::render('pages/dashboard/category/create', $model);
    }

    function categoryStore(): void
    {
        $nameRandom = rand();
        $image = $nameRandom . basename($_FILES["image"]["name"]);
        $target_dir = 'storage/thumbnail/' . $nameRandom;
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            die('fail');
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            } else {
                die("Sorry, there was an error uploading your file.");
            }
        }
        $model = Category::store($image);
        header('Location: ' . '/dashboard/category');;
    }

    function categoryDelete(): void
    {
        $model = Category::delete();
        header('Location: ' . '/dashboard/category');;
    }

    function categoryUpdate(): void
    {
        $model = Category::update();
        header('Location: ' . '/dashboard/category');;
    }

    function categoryEdit(): void
    {
        $_SESSION["auth"] = true;
        $model = [
            "title" => "Category - Edit",
            "data" => Category::getEditCategory(),
            "page" => "admin"
        ];

        View::render('pages/dashboard/category/edit', $model);
    }
}
