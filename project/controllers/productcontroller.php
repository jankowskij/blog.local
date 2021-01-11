<?php

namespace Project\Controllers;

use Core\Controller;

class ProductController extends Controller
{
    private $products = [];
    public $productItem = [];

    public function __construct() {

        $this->products = [
            1 => [
                'name'     => 'product1',
                'price'    => 100,
                'quantity' => 5,
                'category' => 'category1',
            ],
            2 => [
                'name'     => 'product2',
                'price'    => 200,
                'quantity' => 6,
                'category' => 'category2',
            ],
            3 => [
                'name'     => 'product3',
                'price'    => 300,
                'quantity' => 7,
                'category' => 'category2',
            ],
            4 => [
                'name'     => 'product4',
                'price'    => 400,
                'quantity' => 8,
                'category' => 'category3',
            ],
            5 => [
                'name'     => 'product5',
                'price'    => 500,
                'quantity' => 9,
                'category' => 'category3',
            ],
        ];
    }

    public function show($params) {

        foreach ($this->products as $key => $value) {
            if  ($key == $params['id']) {
                $this->productItem = $value;
                }
        }
        return $this->render('product/show', $this->productItem );
    }


    public function all() {

        foreach ($this->products as $key => $value) {
                 $this->productItem[$key] = $value;
                 }
        return $this->render('product/all', $this->productItem );

    }

}
