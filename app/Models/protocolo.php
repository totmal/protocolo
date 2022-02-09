<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protocolo extends Model
{
    protected $table='protocolo';
    protected $fillable = ['id','_token', 'datas', 'tipoCarta', 'protocolo', 'cpf', 'nome', 'meio_entrada', 'telefone', 'codigo_entrada', 'resp_cadastro', 'observacao', 'endereco', 'bairro', 'numero', 'cep', 'codunico', 'historico', 'uf', 'cidade'];
    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
}
