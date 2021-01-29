<?php

namespace Models;

class User 
{

    // Метод регистрации пользователя
    public static function register($name, $email, $pass) {
       
        $db = \config\DB::getConnection();
        $sql = 'INSERT INTO users (name, email, pass) VALUES (:name, :email, :pass)';

        $rezult = $db->prepare($sql);
        $rezult->bindParam(':name', $name, \PDO::PARAM_STR);
        $rezult->bindParam(':email', $email, \PDO::PARAM_STR);
        $rezult->bindParam(':pass', $pass, \PDO::PARAM_STR);

        return $rezult->execute();

    }

    // Метод проверки имени на валидность
    public static function checkName($name)
    {
        if (strlen($name) >= 3) {
            return true;
        }
        return false;
    }

    // Метод проверки пароля на валидность
    public static function checkPass($pass)
    {
        if (strlen($pass) >= 6) {
            return true;
        }
        return false;
    }

    // Метод проверки почты на валидность
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    // Метод проверки почты на уникальность в базе
    public static function checkEmailExist($email) {
        $db = \config\DB::getConnection();
        $sql = 'SELECT COUNT(*) FROM users WHERE email = :email';
        $rezult = $db->prepare($sql);
        $rezult->bindParam(':email', $email, \PDO::PARAM_STR);
        $rezult->execute();

        if ($rezult->fetchColumn()) {
            return false;
        }
        return true;
    }

    public static function checkUser($email, $pass) {
        
        $db = \config\DB::getConnection();
        $sql = 'SELECT * FROM users WHERE email = :email and pass = :pass';

        $rezult = $db->prepare($sql);
        $rezult->bindParam(':email', $email, \PDO::PARAM_STR);
        $rezult->bindParam(':pass', $pass, \PDO::PARAM_STR);
        $rezult->execute();

        $user = $rezult->fetch();

        if ($user) {
            return $user['id'];
        } 
        else {
            return false;
        }
    }

    public static function authUser($userID) {
        session_start();
        $_SESSION['user'] = $userID;
    }

    public static function checkLogged() {
        session_start();
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header('Location: /login');
    }

}