<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost:3306;dbname=Ap;charset=utf8', 'root', '@AC2739TY50JKQ23)');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}