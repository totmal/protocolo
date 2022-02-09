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
            'protocolo' => $request->protocolo,
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
        $_token = $request->_token;
       $tipodecarta = $request->tipoCarta;
                    
        
        switch ($tipodecarta) {
            case "NaoEmitir":
                return("<script>alert('Você cadastrou os dados de $nome código Protocolo $_token' NÃO EMITIR CARTA);</script>"
                    . "<script>window.location.href = '/';</script>");  
            
            case "empresa":
                
               // return "caiu aqui";
                //$protocolo = DB::table('protocolo')->where('_token','==' ,$_token)->get();
                $protocolo1 = protocolo::where('_token','==' ,$_token)->get();

                //     echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para empresa');</script>";
               return view('cartas.empresa', compact('protocolo1')); 
               

                break;

                case 'ministerio_falabr':
                    $protocolo1 = protocolo::where('_token','==' ,$_token)->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.ministerio_falabr', compact('protocolo1')); 
                break;

                case 'presitencia_falabr':
                    $protocolo1 = protocolo::where('_token','==' ,$_token)->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.presidencia_falabr', compact('protocolo1')); 
                break;
                
                case 'mesmoObjeto_falabr':
                    $protocolo1 = protocolo::where('_token','==' ,$_token)->get();
                    //echo "<script>alert('Você cadastrou os dados de $nome código Protocolo $_token para Ministério FalaBR');</script>";
                    return view('cartas.presidencia_falabr', compact('protocolo1')); 
                break;   
            default: return "nada Recebido";         
           
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
