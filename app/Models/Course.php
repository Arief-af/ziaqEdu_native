<?php

namespace ZiaqEdu\Models;

use ZiaqEdu\Models\Model;

class Course extends Model
{
    public static function getAllCourse()
    {
        $category_id = $_GET['id'];
        $queryVideo = self::$mysqli->query("SELECT * FROM courses WHERE category_id = $category_id ORDER BY id LIMIT 1");
        $queryLists = self::$mysqli->query("SELECT * FROM courses JOIN categories ON courses.category_id = categories.id WHERE courses.category_id = $category_id ORDER BY courses.id");
        $video = $queryVideo->fetch_all(MYSQLI_ASSOC);
        $lists = $queryLists->fetch_all(MYSQLI_ASSOC);
        $data = [
            'video' => $video,
            'lists' => $lists
        ];
        return $data;
    }

    public static function getAllShowCourse()
    {
        $category_id = $_GET['category'];
        $id = $_GET['id'];
        $queryVideo = self::$mysqli->query("SELECT * FROM courses WHERE id = $id ORDER BY id LIMIT 1");
        $queryLists = self::$mysqli->query("SELECT  courses.id,
        courses.title,
        courses.video,
        courses.description,
        courses.category_id,
        courses.thumbnail,
        categories.id AS id_category,  -- Alias for categories.id as id_category
        categories.name,
        categories.image,
        categories.desc FROM courses WHERE category_id = $category_id ORDER BY id");
        $video = $queryVideo->fetch_all(MYSQLI_ASSOC);
        $lists = $queryLists->fetch_all(MYSQLI_ASSOC);
        $data = [
            'video' => $video,
            'lists' => $lists
        ];
        return $data;
    }

    public static function index()
    {
        $queryLists = self::$mysqli->query("SELECT courses.id,
        courses.title,
        courses.video,
        courses.description,
        courses.category_id,
        courses.thumbnail,
        categories.id AS id_category,  -- Alias for categories.id as id_category
        categories.name,
        categories.image,
        categories.desc FROM courses
        JOIN categories ON courses.category_id = categories.id;");
        $result = $queryLists->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    public static function store($image, $video)
    {
        $title = $_POST['title'];
        $desc = $_POST['description'];
        $category_id = $_POST['category_id'];
        $query = "INSERT INTO courses (title, thumbnail,description,video,category_id) VALUES ('$title', '$image','$desc','$video','$category_id')";
        $result = self::$mysqli->query($query);

        if ($result) {
            return "Data inserted successfully";
        } else {
            return "Error: " . self::$mysqli->error;
        }
    }

    public static function delete()
    {
        $id = $_GET['id'];
        $query = "DELETE FROM courses WHERE id=$id";
        $result = self::$mysqli->query($query);

        if ($result) {
            return "Data deleted successfully";
        } else {
            return "Error: " . self::$mysqli->error;
        }
    }

    public static function update()
    {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $category_id = $_POST['category_id'];
        $description = $_POST['description'];
        $query = "UPDATE courses
                  SET title = '$title', `description` = '$description', category_id = '$category_id'
                  WHERE id = '$id'";
        $result = self::$mysqli->query($query);
        if ($result) {
            return "Data updated successfully";
        } else {
            return "Error: " . self::$mysqli->error;
        }
    }

    public static function getEditCourse()
    {
        $id = $_GET['id'];
        $query = "SELECT courses.title,
        courses.video,
        courses.id,
        courses.description,
        courses.category_id,
        courses.thumbnail,
        categories.id AS id_category,  -- Alias for categories.id as id_category
        categories.name,
        categories.image,
        categories.desc FROM courses
        JOIN categories ON courses.category_id = categories.id WHERE courses.id = $id";

        $result = self::$mysqli->query($query);

        $result = $result->fetch_all(MYSQLI_ASSOC);
        $data = ['id' => $result[0]['id'], 'title' => $result[0]['title'], 'description' => $result[0]['description'], 'category_id'=>$result[0]['category_id']];
        if ($result) {
            return $data;
        } else {
            return "Error: " . self::$mysqli->error;
        }
    }
}
