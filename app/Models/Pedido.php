<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Pedido extends Eloquent {

    use HasFactory;
    public $table = 'Pedidos';
    public $timestamps = false;

}