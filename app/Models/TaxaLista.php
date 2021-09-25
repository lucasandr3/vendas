<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class TaxaLista extends Eloquent {

    use HasFactory;
    public $table = 'list_tax';
    public $timestamps = false;

}