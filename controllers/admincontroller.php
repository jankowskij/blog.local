<?php

namespace Controllers;

class AdminController
{
    public function actionIndex() {
        $userID = $_SESSION['user'];
        echo $userID;
        require_once(ROOT.'/manager');
    }
}