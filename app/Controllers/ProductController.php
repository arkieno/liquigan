<?php

namespace App\Controllers;
//use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product;
    public function _construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function product($product)
    {
        echo $product;

    }
    public function arkieno()
    {
        $data = $this->product->findAll();
        print_r($data);

    }
    public function index()
    {

    }

}   