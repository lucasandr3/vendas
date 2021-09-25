<?php

namespace App\service;

use App\interfaces\service\ImpressaoServiceInterface;
use App\repository\ImpressaoRepository;

class ImpressaoService implements ImpressaoServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new ImpressaoRepository;
    }

    public function todos()
    {

    }
}