<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class VendaParcela extends Eloquent {

    use HasFactory;
    public $table = 'vendas_parceladas';
    public $timestamps = false;

}