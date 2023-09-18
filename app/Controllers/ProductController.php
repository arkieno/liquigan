<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new \App\Models\ProductModel();
    }

    public function delete($id)
{
    $result = $this->productModel->delete($id);

    if ($result) {
     
        return redirect()->to('/product');
    } else {
        return redirect()->back()->with('error', 'Failed to delete the product.');
    }
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
        
        $inserted = $this->productModel->insert($data);

        if ($inserted) {
            // Product successfully inserted
            return redirect()->to('/product');
        } else {
            // Insertion failed
            return redirect()->back()->with('error', 'Failed to save the product.');
        }
    }

    public function product($product)
    {
        echo $product;
    }

    public function arkieno()
    {
        $data['products'] = $this->productModel->findAll();
        return view('add', $data);
    }

    public function index()
    {
        // Your index method code here
    }
}
