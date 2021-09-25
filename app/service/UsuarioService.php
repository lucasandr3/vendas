<?php

namespace App\service;

use App\interfaces\service\UsuarioServiceInterface;
use App\repository\UsuarioRepository;

class UsuarioService implements UsuarioServiceInterface
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UsuarioRepository;
    }

    public function todosAtivos()
    {
        return $this->repository->todosAtivos();
    }

    public function todosInativos()
    {

    }

    public function clienteId()
    {

    }

    public function adicionar()
    {

    }

    public function editar()
    {

    }

    public function status()
    {

    }
}