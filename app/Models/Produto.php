<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Produto extends Eloquent {

    use HasFactory;
    public $table = 'produtos';
    public $timestamps = false;

    public function vendas()
    {
        return $this->belongsTo(Venda::class);
    }

}