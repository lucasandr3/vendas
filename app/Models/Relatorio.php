<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Relatorio extends Eloquent {

    use HasFactory;
    public $table = 'Relatorios';
    public $timestamps = false;

}