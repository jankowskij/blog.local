<?php

include_once ROOT.'/models/News.php';

class NewsController 

{
    public function actionIndex() {
        echo 'Список новостей';
        $newsList = [];
        $newsList = News::getNewsList();
        require_once(ROOT.'/views/news/index.php');
        return true;
    }

    public function actionView($id) {
        echo 'Просмотр одной новости<br>';
        if ($id) {
            $newsItem = News::getNewsItemById($id);
            echo '<pre>';
            print_r($newsItem);
            echo '</pre>';
        }
    }
}