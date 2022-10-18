<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Categoria;


class CategoriaController extends Controller
{

    public function cadastrar(){
        return view('Cat_Autor.create');
    }

    public function store(Request $request){
        $data = $request->only([
            'descr_categ'
        ]);
       
        $validator = Validator::make($data,[
            'descr_categ'=>['required','string','unique:categoria_livro']
        ]);
        if($validator->fails()){
            return redirect()->route('cadastrar')->withErrors($validator)->withInput();
        }
        $categoria = new Categoria;
        $categoria->descr_categ = $data ['descr_categ'];
        $categoria->save();
         return redirect()->route('cadastrar');
        }

    
}