<?php
namespace ZiaqEdu\Models;

class Model {
    // Assuming you have a $db connection, replace it with your actual database connection
    protected static $mysqli;

    public static function setDB($mysqli) {
        self::$mysqli = $mysqli;
    }
}