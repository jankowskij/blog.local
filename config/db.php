<?php

namespace Config;

class DB 
{
    public static function getConnection() 
    {
        $host = 'p558205.mysql.ihc.ru';
        $dbname = 'p558205_test';
        $user = 'p558205_test';
        $pass = 'j9Vg43Zqxz';
        $db = new \PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $db;
    }
}