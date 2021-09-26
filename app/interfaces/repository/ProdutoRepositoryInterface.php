<?php

namespace App\interfaces\repository;

interface ProdutoRepositoryInterface
{
    public function todosAtivos();

    public function todosId($produtosId);

    public function todosInativos();

    public function vencidos();

    public function validade();

    public function clienteId();

    public function adicionar();

    public function editar();

    public function status();
}