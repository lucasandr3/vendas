<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Despesa extends Eloquent {

    use HasFactory;
    public $table = 'despesa';
    public $timestamps = false;

}