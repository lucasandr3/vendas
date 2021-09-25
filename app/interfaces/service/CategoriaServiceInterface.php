<?php

namespace App\interfaces\service;

interface CategoriaServiceInterface
{
    public function todosAtivas();

    public function todosInativas();

    public function categoriaId();

    public function adicionar();

    public function editar();

    public function status();
}