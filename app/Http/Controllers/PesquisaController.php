<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\protocolo;

class PesquisaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $search = Request('search');
        if($search){
            $events = protocolo::where('cpf', 'like', '%'.$search.'%')->get();
    }else{
        $events = Protocolo::all();
    }
    return view('layouts.pesquisa', ['events' => $events, 'search' => $search, 'tipo' => 'o CPF']);
    }

    public function pesquisanome()
    {
        //
        
        $search = Request('search');
        if($search){
            $events = protocolo::where('nome', 'like', '%'.$search.'%')->get();
    }else{
        $events = Protocolo::all();
    }
    return view('layouts.pesquisa', ['events' => $events, 'search' => $search, 'tipo' => 'o nome de cidadão']);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        Protocolo::show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
