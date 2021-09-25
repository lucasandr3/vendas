<?php
namespace App\repository;

use App\interfaces\repository\EstoqueRepositoryInterface;
use App\Models\Estoque;

class EstoqueRepository implements EstoqueRepositoryInterface
{
    public function todos()
    {
        return Estoque::all();
    }
}