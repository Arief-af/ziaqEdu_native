<?php
namespace ZiaqEdu\Models;
use ZiaqEdu\Models\Model;

class User extends Model 
{
    public static function getAllUsers() {
        $result = self::$mysqli->query('SELECT * FROM user');
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        return $rows;
    }
}
