<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Marca extends Eloquent {

    use HasFactory;
    public $table = 'Marcas';
    public $timestamps = false;

}