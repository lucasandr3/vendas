<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Taxa extends Eloquent {

    use HasFactory;
    public $table = 'taxas';
    public $timestamps = false;

}