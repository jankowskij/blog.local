<?php

namespace Controllers;

class UserController 
{
    public static function actionRegister()
    {
        $name = '';
        $email = '';
        $pass = '';
        $errors = false;

        if (isset($_POST['name'])) {
           $name = $_POST['name'];
           $email = $_POST['email'];
           $pass = $_POST['pass'];

            if (!\models\User::checkName($name)) {
                $errors[] = 'Имя должно быть не менее 3 символов';
            }

            if (!\models\User::checkPass($pass)) {
                $errors[] = 'Пароль должен быть не менее 6 символов';
            }

            if (!\models\User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }

            if (!\models\User::checkEmailExist($email)) {
                $errors[] = 'Такой email уже зарегистрирован';
            }

            if ($errors == false) {
                $rezult = \models\User::register($name, $email, $pass);
            }
        }
        require_once ROOT.'/view/user/register.php';
    }


    public static function actionLogin() {

        $email = '';
        $pass = '';
        $errors = false;

        if (isset($_POST['email']) and isset($_POST['pass'])) {

            // Принимаем данные из глобального массива
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            // Проверяем наличие пользователя в базе
            $userID = \models\User::checkUser($email, $pass);

            // Авторизуемся
            if ($userID !== false) {
                \models\User::authUser($userID);
                header( 'Location: '.HOME );
            }
            else {
                $errors[] = 'Неверные данные или вы еще не зарегистрированы';
            }

        }

        require_once ROOT.'/view/user/login.php';
    
    }
}