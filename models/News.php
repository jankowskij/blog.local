

<?php
include_once ROOT.'/components/DB.php';

class News

{


    public static function getNewsItemById($id)
    {
        $dbh = DB::getConnection();
        $id = intval($id);
        $rezult = $dbh->query('select * from users WHERE id=' . $id);
        $rezult->setFetchMode(PDO::FETCH_ASSOC);
        $newsItem = $rezult->fetch();

        return $newsItem;
    }

    public static function getNewsList() 
    {
        $dbh = DB::getConnection();
        $newsList = [];
        $rezult = $dbh->query('select name, age, city from users');
        $i = 0;
        while($row = $rezult->fetch()) {
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['age'] = $row['age'];
            $newsList[$i]['city'] = $row['city'];
            $i++;
            
        }
        return $newsList;


    }





}