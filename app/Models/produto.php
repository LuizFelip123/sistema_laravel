<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'Produto';
    protected $fillable =  ['nome', 'descricao', 'valor', 'quantidade','disponivel'];
    protected $guarded = [];
}
