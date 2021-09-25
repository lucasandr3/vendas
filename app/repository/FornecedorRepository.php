<?php
namespace App\repository;

use App\interfaces\repository\FornecedorRepositoryInterface;
use App\Models\Fornecedor;

class FornecedorRepository implements FornecedorRepositoryInterface
{
    public function todos()
    {
        return Fornecedor::all();
    }
}