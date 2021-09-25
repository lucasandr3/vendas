<?php
namespace App\repository;

use App\interfaces\repository\PedidoRepositoryInterface;
use App\Models\Pedido;

class PedidoRepository implements PedidoRepositoryInterface
{
    public function todos()
    {
        return Pedido::all();
    }
}