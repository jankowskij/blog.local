<?php

namespace Models;

class News 
{
    public static function getNewsList() 
    {
        $db = \config\DB::getConnection();
        $newList = [];
        $rezult = $db->query('Select * '.'from post '.'limit 10');
        $i = 0;
        while ($row = $rezult -> fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['post'] = $row['post'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['autor'] = $row['autor'];
            $i++;
        }
        return $newsList;
    }

    public static function getNewsItemById($id) 
    {
        $db = \config\DB::getConnection();
        $rezult = $db -> query('select * from post where id='.$id);
        $rezult -> setFetchMode(\PDO::FETCH_ASSOC);
        $newsItem = $rezult -> fetch();
        return $newsItem;
    }
}