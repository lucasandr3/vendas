<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Eloquent;

class VendaPagamento extends Eloquent {

    use HasFactory;
    public $table = 'vendas_pagamento';
    public $timestamps = false;

}