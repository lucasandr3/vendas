<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Impressao extends Eloquent {

    use HasFactory;
    public $table = 'Impressaos';
    public $timestamps = false;

}