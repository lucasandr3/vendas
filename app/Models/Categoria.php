<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Categoria extends Eloquent {

    use HasFactory;
    public $table = 'Categorias';
    public $timestamps = false;

}