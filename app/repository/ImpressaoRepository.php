<?php
namespace App\repository;

use App\interfaces\repository\ImpressaoRepositoryInterface;
use App\Models\Impressao;

class ImpressaoRepository implements ImpressaoRepositoryInterface
{
    public function todos()
    {
        return Impressao::all();
    }
}