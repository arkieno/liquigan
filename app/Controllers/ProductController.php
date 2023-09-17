<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function index()
    {
        $main = new ProductModel();
        $data['data'] = $main->findAll();
        return view('main', $data);
    }

    public function save()
    {
        $main = new ProductModel;
        $data = [
            'UPC' => $this->request->getVar('UPC'),
            'ProductName' => $this->request->getVar('ProductName'),
            'Price' => $this->request->getVar('Price'),
            'Quantity' => $this->request->getVar('Quantity'),
            'Create_at' => $this->request->getVar('Create_at'),
        ];
        $main = new ProductModel();
        $main->save($data);
        return redirect()->to('/');
    }

    public function delete($id)
    {
        $main = new ProductModel;
        $product = $main->find($id);

        if (!$product){
            
            return redirect()->to('/error');


        }

        $main->delete($id);

        return redirect()->to('/');


        }
        public function add()
        {
            $model=new ProductModel();
            $data['data']= $model->select('id,ProductName')->findAll();
            return view('add',$data);
                
        }   

    }   