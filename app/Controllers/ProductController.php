<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function product($product)
    {
        echo $product;

    }
    public function arkieno()
    {
        return view('products');

    }
    public function index()
    {

    }

}   