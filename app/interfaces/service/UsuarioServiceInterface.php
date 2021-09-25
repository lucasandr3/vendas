<?php

namespace App\interfaces\service;

interface UsuarioServiceInterface
{
    public function todosAtivos();

    public function todosInativos();

    public function clienteId();

    public function adicionar();

    public function editar();

    public function status();
}