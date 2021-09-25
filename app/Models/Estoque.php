<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Estoque extends Eloquent {

    use HasFactory;
    public $table = 'Estoques';
    public $timestamps = false;

}