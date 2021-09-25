<?php
namespace App\service;

use App\interfaces\service\ClienteServiceInterface;
use App\repository\ClienteRepository;


class ClienteService implements ClienteServiceInterface
{
    private $repository;

    public function __construct ()
    {
        $this->repository = new ClienteRepository;
    }

    public function clientesAtivos()
    {
        return $this->repository->ativos();
    }
}