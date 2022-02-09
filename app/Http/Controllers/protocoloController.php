<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\models\protocolo;
use App\Models\protocolo as ModelsProtocolo;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Middleware\VerifyCsrfToken;



class protocoloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $protocolo = DB::table('protocolo')->get();
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
        Protocolo::create([
            '_token' => $request->_token,
            
            'tipoCarta' => $request->tipoCarta,
            'protocolo' => $request->protocolo . $request->protocolo1 . $request->protocolo2,
            'cpf' => $request->cpfcnpj,
            'nome' => $request->nome,
            'meio_entrada' => $request->meio_entrada,
            'telefone' => $request->telefone,
            'codigo_entrada' => $request->codigo_entrada,
            'resp_cadastro' => $request->resp_cadastro,
            'observacao' => $request->observacao,
            'endereco' => $request->endereco,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'cep' => $request->cep,
            'codunico' => $request->codunico,
            'historico' => $request->historico,
            'uf' => $request->uf,
            'cidade' => $request->cidade,
        ]);
        $nome = $request->nome;
        $protocolo = $request->protocolo . $request->protocolo1 . $request->protocolo2;
       $tipodecarta = $request->tipoCarta;
       $cpf = $request->cpfcnpj;
                    
        
        switch ($tipodecarta) {
            case "naoEmitir":
                return("<script>alert('Você cadastrou os dados de $nome código Protocolo $protocolo NÃO EMITIR CARTA');</script>"
                    . "<script>window.location.href = '/';</script>");  
            break;
            
            case "empresa":
                
               // return "caiu aqui";
                //$protocolo = DB::table('protocolo')->where('_token','==' ,$_token)->get();
                 $protocolo1 = DB::table('protocolo')
                ->where('cpf', $cpf)
                ->where('protocolo', $protocolo)
                ->where('datas', $nome)
                ->get();

                //     echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para empresa');</script>";
               return view('cartas.empresa', compact('protocolo1'));                

                break;

                case 'ministerio_falabr':
                    //$protocolo1 = protocolo::where('_token','==' ,$_token)->get();
                    $protocolo1 = DB::table('protocolo')
                ->where('cpf', $cpf)
                ->where('protocolo', $protocolo)
                ->where('datas', $nome)
                ->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.ministerio_falabr', compact('protocolo1')); 
                break;

                case 'presitencia_falabr':
                   // $protocolo1 = protocolo::where('_token','==' ,$_token)->get();
                   $protocolo1 = DB::table('protocolo')
                ->where('cpf', $cpf)
                ->where('protocolo', $protocolo)
                ->where('datas', $nome)
                ->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.presidencia_falabr', compact('protocolo1')); 
                break;
                
                case 'mesmoObjeto_falabr':
                   // $protocolo1 = protocolo::where('_token','==' ,$_token)->get();
                   $protocolo1 = DB::table('protocolo')
                ->where('cpf', $cpf)
                ->where('protocolo', $protocolo)
                ->where('datas', $nome)
                ->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.presidencia_falabr', compact('protocolo1')); 
                break;   
           
                default: return "nada Recebido";      break;   
           
            }
        
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $imprimircarta = $request->imprimircarta;
        //return $imprimircarta;
if($imprimircarta == "alterar"){
        $protocolo = DB::table('protocolo')
        ->where('id', $request->id)
       
        ->take(30) 
        ->get();
        
        return view('layouts.editarcarta', compact('protocolo'));
}else{
    $protocolo = DB::table('protocolo')
    ->where('id', $request->id)
        
        ->get();
    $nome = $request->nome;
        $id = $request->id;
       $tipodecarta = $request->tipodecarta;
               // return "$tipodecarta a  $id";
        
        switch ($tipodecarta) {
                        
            case "empresa":
                
               // return "caiu aqui";
                //$protocolo = DB::table('protocolo')->where('_token','==' ,$_token)->get();
                $protocolo1 = protocolo::where('id','==' ,$id)->get();

                //     echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para empresa');</script>";
               return view('cartas.empresa1', compact('protocolo')); 
               

                break;

                case 'ministerio_falabr':
                    $protocolo1 = protocolo::where('id','==' ,$id)->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.ministerio_falabr1', compact('protocolo')); 
                break;

                case 'presitencia_falabr':
                    $protocolo1 = protocolo::where('id','==' ,$id)->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.presidencia_falabr1', compact('protocolo')); 
                break;
                
                case 'mesmoObjeto_falabr':
                    $protocolo1 = protocolo::where('id','==' ,$id)->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.mesmoobjetofalabr1', compact('protocolo')); 
                break;   
            default: return "nada Recebido";         
           
            }
}
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $protocolo = DB::table('protocolo')
        ->where('id', $request->iddatas)
        ->update([
            '_token' => $request->_token,
            'tipoCarta' => $request->tipoCarta,
            'protocolo' => $request->protocoloid,
            'cpf' => $request->cpfcnpj,
            'nome' => $request->nome,
            'meio_entrada' => $request->meio_entrada,
            'telefone' => $request->telefone,
            'codigo_entrada' => $request->codigo_entrada,
            'resp_cadastro' => $request->resp_cadastro,
            'observacao' => $request->observacao,
            'endereco' => $request->endereco,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'cep' => $request->cep,
            'codunico' => $request->codunico,
            'historico' => $request->historico,
            'uf' => $request->uf,
            'cidade' => $request->cidade,
            'tipoCarta' => $request->tipoCarta,
        ]);
            
        return "<script>alert('Salvo com sucesso'); window.location.href='/';</script>";
        
        
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
