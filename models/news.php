<?php

namespace Models;

class News 
{
    public static function getNewsList() 
    {
        $db = \config\DB::getConnection();
        $newList = [];
        $rezult = $db->query('Select * '.'from users '.'limit 10');
        $i = 0;
        while ($row = $rezult -> fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['age'] = $row['age'];
            $newsList[$i]['gender'] = $row['gender'];
            $newsList[$i]['work'] = $row['work'];
            $newsList[$i]['city'] = $row['city'];
            $newsList[$i]['allcash'] = $row['allcash'];
            $i++;
        }
        return $newsList;
    }

    public static function getNewsItemById($id) 
    {
        $db = \config\DB::getConnection();
        $rezult = $db -> query('select * from users where id='.$id);
        $rezult -> setFetchMode(\PDO::FETCH_ASSOC);
        $newsItem = $rezult -> fetch();
        return $newsItem;
    }
}