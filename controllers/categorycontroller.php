<?php

namespace Controllers;

class CategoryController 
{
    public function actionList() {
        $categoryList = [];
        $categoryList = \model\Category::getCategoryList();
        require_once(ROOT.'/view/category/index.php');
        return true;
    }
}