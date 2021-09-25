<?php

namespace App\interfaces\repository;

interface CategoriaRepositoryInterface
{
    public function todosAtivas();

    public function todosInativas();

    public function categoriaId();

    public function adicionar();

    public function editar();

    public function status();
}