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

    public static function store($image)
    {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $query = "INSERT INTO categories (name, image, `desc`) VALUES ('$name', '$image', '$desc')";
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
