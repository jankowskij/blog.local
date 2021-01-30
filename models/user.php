<?php

namespace Models;

class User 
{

    // Метод добавления нового пользователя в базу
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

        // Метод поиска введенной пары логин-пароль в базе
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

    // Метод авторизации пользователя
    public static function authUser($userID) {
        $_SESSION['user'] = $userID;
    }

    // Метод проверки авторизован пользователь? Возвращает id пользователя
    public static function checkLogged() {
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
        header('Location: /login');
    }

    // Метод проверки авторизован пользователь? Возвращает true или false
    public static function isGuest() {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

     // Метод получения данных об авторизованном пользователе
     public static function getUserById($userID) {
         $db = \config\DB::getConnection();
         $sql = 'SELECT * FROM users WHERE id = :id';
         $rezult = $db->prepare($sql);
         $rezult ->bindParam(':id', $userID, \PDO::PARAM_STR);
         $rezult->setFetchMode(\PDO::FETCH_ASSOC);
         $rezult->execute();
         return $rezult->fetch();
     }

     // Метод редактирования данных пользователя
     public static function edit($userID, $name, $pass, $work, $age, $city) {
         $db = \config\DB::getConnection();
         $sql = "UPDATE users SET name = :name, pass = :pass, work = :work, age = :age, city = :city WHERE id = :id";
         $rezult = $db->prepare($sql);
         $rezult ->bindParam(':id', $userID, \PDO::PARAM_INT);
         $rezult ->bindParam(':name', $name, \PDO::PARAM_STR);
         $rezult ->bindParam(':pass', $pass, \PDO::PARAM_STR);
         $rezult ->bindParam(':work', $work, \PDO::PARAM_STR);
         $rezult ->bindParam(':age', $age, \PDO::PARAM_INT);
         $rezult ->bindParam(':city', $city, \PDO::PARAM_STR);
         return $rezult->execute();
     }

}