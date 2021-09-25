<?php
namespace App\repository;

use App\interfaces\repository\ConfiguracaoRepositoryInterface;
use App\Models\Configuracao;

class ConfiguracaoRepository implements ConfiguracaoRepositoryInterface
{
    public function todos()
    {
        return Configuracao::all();
    }
}