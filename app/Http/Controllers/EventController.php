<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelDog;
use App\Models\Models\ModelRaca;

class EventController extends Controller
{

    public function store(Request $request){
    	$dog = new ModelDog();
    	$dog->nome = $request->nome;
    	$dog->raca = $request->raca;
    	$dog->idade = $request->idade;
    	$dog->save();

    	return redirect('add/')->with('msg', 'Cachorro cadastrado com sucesso!');
    }

    public function destroy($id){
    	ModelDog::findOrFail($id)->delete();
    	return redirect('list/')->with('msg', 'Cachorro deletado do banco com sucesso!');
    }

    public function edit($id){
    	$racas = ModelRaca::select('id_raca', 'nome_raca')->get()->sortBy('nome_raca');
    	$dog = ModelDog::findOrFail($id);
    	return view('events.edit', ['event'=>$dog], compact('racas'));
    }

    public function update(Request $request){
    	ModelDog::findOrFail($request->id)->update($request->all());
    	return redirect('list/')->with('msg', 'Dados do cachorro atualizados com sucesso!');
    }
}
