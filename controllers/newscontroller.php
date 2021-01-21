<?php

namespace Controllers;

class NewsController 
{
    public function actionIndex()
    {
        $newsList = [];
        $newsList = \Models\News::getNewsList();
        require_once (ROOT.'/view/news/index.php');
        return true;
    }

    public function actionList($id)
    {
        $newsItem = \Models\News::getNewsItemById($id);
        require_once (ROOT.'/view/news/post.php');
        return true;
    }
}