<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ListagemProtocolo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ProtocoloListagem', function (Blueprint $table) {
            $table->timestamp('datas');
                $table->text('tipoCarta');
                $table->text('protocolo');
                $table->text('cpf');
                $table->text('nome');
                $table->text('meio_entrada');
                $table->text('telefone');
                $table->text('codigo_entrada');
                $table->text('resp_cadastro');
                $table->longText('observacao');
                $table->text('endereco');
                $table->text('bairro');
                $table->text('numero');
                $table->text('cep');
                $table->text('codunico');
                $table->longText('historico');
                $table->text('uf');
                $table->text('cidade');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        
       
    }
}
