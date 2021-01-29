<?php

namespace Controllers;

class AdminController
{
    public function actionIndex() {
        $userID = \models\User::checkLogged();
        require_once(ROOT.'/view/admin/index.php');
        return true;
    }
}