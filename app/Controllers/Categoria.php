<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class Categoria extends BaseController
{

    public function index(){
        
        $categoriaModel = new CategoriaModel();

        $data = $categoriaModel->findAll();

        return View('/categoria/index',['categorias'=>$data]);
    }

    public function edit($id){
        $categoriaModel = new CategoriaModel();
        $data = $categoriaModel->find($id);
        return View('/categoria/edit',['categoria'=>$data]);
    }

    public function update($id){
        $categoriaModel = new CategoriaModel();
        $data=[
            'categoria'=> $this->request->getPost('categoria'),
        ];
        $categoriaModel->update($id, $data);
        return redirect()->to('/categoria');
    }


    public function new(){
        return View('/categoria/new',['categoria'=>['categoria'=>'']]);
    }


    public function create(){
        $categoriaModel = new CategoriaModel();
        $data=[
            'categoria'=> $this->request->getPost('categoria'),
        ];
        $categoriaModel->save($data);
        return redirect()->to('/categoria');
    }

    public function delete($id){
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);
        return redirect()->to('/categoria');
    }

}