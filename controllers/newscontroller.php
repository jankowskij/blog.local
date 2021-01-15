<?php

namespace Controllers;

class NewsController 
{
    public function actionIndex()
    {
        echo 'Просмотр списка новостей';
    }

    public function actionList()
    {
        echo 'Просмотр одной новости';
    }
}