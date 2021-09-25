<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Fornecedor extends Eloquent {

    use HasFactory;
    public $table = 'Fornecedors';
    public $timestamps = false;

}