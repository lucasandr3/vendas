<?php

namespace App\interfaces\repository;

interface AjaxRepositoryInterface
{
    public function abreCaixa($dados);

    public function listaProdutos($dados);

    public function verificaSenhaDesconto($senha, $user);
}