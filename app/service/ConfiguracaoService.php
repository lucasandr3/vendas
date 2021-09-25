<?php

namespace App\service;

use App\interfaces\service\ConfiguracaoServiceInterface;
use App\repository\ConfiguracaoRepository;

class ConfiguracaoService implements ConfiguracaoServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ConfiguracaoRepository;
    }

    public function todos()
    {

    }
}