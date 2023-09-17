<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $product;

    public function __construct()
    {
        $this->product = new \App\Models\ProductModel();
    }
    public function delete($id)
    {
        $this->product->ddelete($id);
        return redirect()->to('/product');

    }
    public function save()
    {
        $data = [
            'UPC' => $this->request->getVar('UPC'),
            'ProductName'  => $this->request->getVar('ProductName'),
            'Price' => $this->request->getVar('Price'),
            'Quantity' => $this->request->getVar('Quantity'),
            'Create_at' => $this->request->getVar('Create_at'),
        ];
        $this->product->save($data);
        return redirect()->to('/product');

    }

    public function product($product)
    {
        echo $product;
    }

    public function arkieno()
    {
        $data ['products'] = $this->product->findAll();
        return view('add', $data);
    }

    public function index()
    {
        // Your index method code here
    }
}
