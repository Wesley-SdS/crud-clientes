<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Cliente extends Model
{
    protected $table = 'Cliente';
    use HasFactory;

    protected $fillable = ['nome', 'email', 'cpf', 'datanasc', 'rua', 'numero', 'cep', 'cidade', 'estado', 'uf', 'status'];
}
