<?php

namespace Api;

use PDO;
use PDOException;

class DBClass
{
    protected static $host = 'localhost';
    protected static $dbname = 'restoran_project';
    protected static $user = 'root';
    protected static $password = 'root';

    static function connect()
    {
        try {
            $db = new PDO('mysql:host='. self::$host .';dbname='. self::$dbname, self::$user, self::$password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }

        return $db;
    }

    static function getTableMenu()
    {
        $db = self::connect();
        $arData = [];

        $stmt = $db->query("SELECT * FROM menu");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $arData[] = $row;
        }

        return $arData;
    }
}
