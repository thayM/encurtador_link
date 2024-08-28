<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';
    protected $fillable = ['email', 'nome', 'motivo', 'mensagem'];
    use HasFactory;
}
