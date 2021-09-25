<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class VendaProduto extends Eloquent {

    use HasFactory;
    public $table = 'vendas_produtos';
    public $timestamps = false;

}