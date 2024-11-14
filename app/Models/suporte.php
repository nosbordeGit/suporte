<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suporte extends Model
{
    use HasFactory;

    //indica o nome da tabela no banco de dados
    protected $table = 'chamados';

    //indica as colunas onde pode ser salvo

    protected $fillable =['titulo', 'descricao', 'email', 'status','atendimento'];

}
