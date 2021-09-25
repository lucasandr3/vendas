<?php

namespace App\interfaces\service;

interface MarcaServiceInterface
{
    public function todosAtivas();

    public function todosInativas();

    public function MarcaId();

    public function adicionar();

    public function editar();

    public function status();
}