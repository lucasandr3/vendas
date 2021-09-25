<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Parceiro extends Eloquent {

    use HasFactory;
    public $table = 'parceiros';
    public $timestamps = false;

}