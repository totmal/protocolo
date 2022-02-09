<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CadastroProtocoloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolo', function (Blueprint $table) {
            $table->longText('_token');
            $table->timestamp('datas');
                $table->text('tipoCarta')->nullable();
                $table->text('protocolo')->nullable();
                $table->text('cpf')->nullable();
                $table->text('nome')->nullable();
                $table->text('meio_entrada')->nullable();
                $table->text('telefone')->nullable();
                $table->text('codigo_entrada')->nullable();
                $table->text('resp_cadastro')->nullable();
                $table->longText('observacao')->nullable();
                $table->text('endereco')->nullable();
                $table->text('bairro')->nullable();
                $table->text('numero')->nullable();
                $table->text('cep')->nullable();
                $table->text('codunico')->nullable();
                $table->longText('historico')->nullable();
                $table->text('uf')->nullable();
                $table->text('cidade')->nullable();
                $table->timestamp('creation_date')->nullable();
                $table->timestamp('updated_date')->nullable();
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
