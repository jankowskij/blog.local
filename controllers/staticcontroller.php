<?php

namespace Controllers;

class StaticController
{
    public function actionAbout() {
        
        require_once (ROOT.'/view/static/about.php');
        return true;
    }
}