<?php

namespace App\interfaces\repository;

interface UsuarioRepositoryInterface
{
    public function todosAtivos();

    public function todosInativos();

    public function clienteId();

    public function adicionar();

    public function editar();

    public function status();
}