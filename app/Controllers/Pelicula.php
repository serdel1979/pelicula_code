<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController
{
    public function index()
    {

        $peliculaModel = new PeliculaModel();

        $data = $peliculaModel->findAll();

        return View('/pelicula/index',['peliculas'=>$data]);
    }

    public function edit($id){
        $peliculaModel = new PeliculaModel();
        return View('/pelicula/edit',['pelicula'=>$peliculaModel->find($id)]);
    }

    public function update($id){
        $peliculaModel = new PeliculaModel();
        $data=[
            'titulo'=> $this->request->getPost('titulo'),
            'descripcion'=> $this->request->getPost('descripcion')
        ];
        $peliculaModel->update($id, $data);
        return redirect()->to('/pelicula');
    }

    public function new(){
        return View('/pelicula/new',[
            'pelicula'=>[
                'titulo'=> '',
                'descripcion' => ''
            ]
        ]);
    }

    public function delete($id){
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);
        return redirect()->to('/pelicula');
    }

    public function create(){

        $peliculaModel = new PeliculaModel();
        $data=[
            'titulo'=> $this->request->getPost('titulo'),
            'descripcion'=> $this->request->getPost('descripcion')
        ];
        $peliculaModel->insert($data);
        return redirect()->to('/pelicula');
    }



}
