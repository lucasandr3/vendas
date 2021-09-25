<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Receita extends Eloquent {

    use HasFactory;
    public $table = 'Receitas';
    public $timestamps = false;

}