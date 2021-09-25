<?php

namespace App\interfaces\repository;

interface MarcaRepositoryInterface
{
    public function todosAtivas();

    public function todosInativas();

    public function MarcaId();

    public function adicionar();

    public function editar();

    public function status();
}