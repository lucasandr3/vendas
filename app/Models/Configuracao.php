<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Configuracao extends Eloquent {

    use HasFactory;
    public $table = 'Configuracaos';
    public $timestamps = false;

}