<?php

namespace ZiaqEdu\Models;

use LDAP\Result;
use ZiaqEdu\Models\Model;

class Category extends Model
{
    public static function getAllCategory()
    {
        $result = self::$mysqli->query('SELECT * FROM categories');
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
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
