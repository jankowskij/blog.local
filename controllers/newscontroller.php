<?php

namespace Controllers;

class NewsController 
{
    public function actionIndex()
    {
        $newsList = [];
        $newsList = \Models\News::getNewsList();
        echo '<pre>';
        print_r($newsList);
        echo '<pre>';
        return true;
    }

    public function actionList($id)
    {
        $newsItem = \Models\News::getNewsItemById($id);
        echo '<pre>';
        print_r($newsItem);
        echo '<pre>';
        return true;
    }
}