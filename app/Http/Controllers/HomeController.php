<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\protocolo;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $protocolo = DB::table('protocolo')->orderBy('datas','desc')->get();
        return view('inicio', compact('protocolo'));
    }

    public function inicio()
    {
        $protocolo = DB::table('protocolo')->take(30)->orderBy('datas','DESC')->get();
        return view('inicio', compact('protocolo'));
    }
    public function pesquisa()
    {
        $protocolo = DB::table('protocolo')->take(30)->get();
        return view('layouts.pesquisa', compact('protocolo'));
        
    }

    public function gravar()
    {
        //$name = $request->input('name');
        DB::table('protocolodados')->insert(
            ['protocolo' => request->input('protocolo'), 
            'nome' => request->input('nome'), 
            'email' => request->input('email'), 
            'telefone' => request->input('telefone'), 
            'endereco' => request->input('endereco'), 
            'cidade' => request->input('cidade'), 
            'estado' => request->input('estado'), 
            'cep' => request->input('cep'), '
            data' => request->input('data'), 
            'hora' => request->input('hora'), 
            'tipo' => request->input('tipo'), 
            'descricao' => request->input('descricao')]
            
            
        );
        
        return ('gravou');
        return (request()->all());
      

        //
    }
}
