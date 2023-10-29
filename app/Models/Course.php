<?php

namespace ZiaqEdu\Models;

use ZiaqEdu\Models\Model;

class Course extends Model
{
    public static function getAllCourse()
    {
        $category_id = $_GET['id'];
        $queryVideo = self::$mysqli->query("SELECT * FROM courses WHERE category_id = $category_id ORDER BY id LIMIT 1");
        $queryLists = self::$mysqli->query("SELECT * FROM courses WHERE category_id = $category_id ORDER BY id");
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
        $queryLists = self::$mysqli->query("SELECT * FROM courses
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
        $query = "DELETE FROM categories WHERE id='$id'";
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
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $query = "UPDATE categories
                  SET name = '$name', `desc` = '$desc'
                  WHERE id = '$id'";
        $result = self::$mysqli->query($query);
        if ($result) {
            return "Data updated successfully";
        } else {
            return "Error: " . self::$mysqli->error;
        }
    }

    public static function getEditCategory()
    {
        $id = $_GET['id'];
        $query = "SELECT * FROM categories WHERE id='$id'";
        $result = self::$mysqli->query($query);
        $result = $result->fetch_all(MYSQLI_ASSOC);
        $data = ['id' => $result[0]['id'], 'name' => $result[0]['name'], 'desc' => $result[0]['desc']];
        if ($result) {
            return $data;
        } else {
            return "Error: " . self::$mysqli->error;
        }
    }
}
