<?php
namespace ZiaqEdu\Models;
use ZiaqEdu\Models\Model;

class User extends Model 
{
    public static function login() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = self::$mysqli->query("SELECT * FROM users where username = '$username' and password = '$password'");
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return !empty($rows);
    }

    public static function store() {
        $result = self::$mysqli->query('SELECT * FROM users');
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
}
