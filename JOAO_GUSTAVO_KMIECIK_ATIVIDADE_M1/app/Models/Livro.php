<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['nome_livro', 'nome_original', 'genero_livro', 'sinopse_livro', 'paginas_livro', 'anopub_livro', 'editora_livro'];
    public $timestamps = false;
}
