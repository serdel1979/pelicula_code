<?php

namespace App\Controllers;

class Pelicula extends BaseController
{
    public function index()
    {
       return View('index',[
        'nombre'=>'Listado de películas'
       ]);
    }
}
