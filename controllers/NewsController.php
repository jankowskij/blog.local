<?php

class NewsController 
{
    public function actionIndex() {
        echo 'Список новостей';
        return true;
    }

    public function actionView($category, $id) {
        echo 'Просмотр одной новости<br>';
        echo $category.'<br>';
        echo $id.'<br>';
    }
}