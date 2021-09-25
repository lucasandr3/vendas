<?php

namespace App\interfaces\service;

interface UnidadeServiceInterface
{
    public function todosAtivas();

    public function todosInativas();

    public function UnidadeId();

    public function adicionar();

    public function editar();

    public function status();
}