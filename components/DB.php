<?php

class DB 
{
    public static function getConnection() {
        
try {
    $dbh = new PDO('mysql:dbname=db_user_1;host=localhost', 'user_1', 'PASS!dkflbr4444', 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    echo 'Подключение к базе прошло успешно! <br><br>';
    return $dbh;
}
 catch (PDOException $e) {
    $e->getMessage();
    die();
}
    }
}