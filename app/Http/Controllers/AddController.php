<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelRaca;
use App\Models\Models\ModelCachorro;

class AddController extends Controller
{
    public function index(){
		$racas = ModelRaca::select('id_raca', 'nome_raca')->get()->sortBy('nome_raca');
    	return view('add.index', compact('racas'));
    }

     public function show($id)
    {
        echo $id;
    }
}
