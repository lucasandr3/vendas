<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

    use HasFactory;
    //protected $fillable = array('*');
    public $table = "usuarios";
    public $timestamps = false;
}