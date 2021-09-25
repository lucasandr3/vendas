<?php

namespace App\interfaces\service;

interface AjaxServiceInterface
{
    public function abreCaixa($dados);

    public function listaProdutos($dados);

    public function verificaSenhaDesconto($senha, $user);
}