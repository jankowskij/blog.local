<?php

namespace Controllers;

class AdminController
{
    public function actionIndex() {
        $userID = \models\User::checkLogged();
        $user = \models\User::getUserById($userID);
        require_once (ROOT.'/view/admin/index.php');
        return true;
    }

    public function actionEdit() {
        $userID = \models\User::checkLogged();
        $user = \models\User::getUserById($userID);

        $username = $user['name'];
        $userpass = $user['pass'];

        $rezult = false;

        if (isset($_POST['submit'])) {
            $username = $_POST['name'];
            $userpass = $_POST['pass'];

            $errors = false;

            if (!\models\User::checkName($username)) {
                $errors[] = 'Имя должно быть не короче 3 символов';
            }

            if (!\models\User::checkPass($userpass)) {
                $errors[] = 'Пароль должен быть не короче 6 символов';
            }

            if ($errors == false) {
                $rezult = \models\User::edit($userID, $username, $userpass);
            }

        }

        require_once (ROOT.'/view/admin/edit.php');
        return true;
    }
}