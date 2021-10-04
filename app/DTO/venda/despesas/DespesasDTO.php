<?php


namespace App\DTO\venda\despesas;

use JsonSerializable;
use Utils\Utils;

class DespesasDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function jsonSerialize(): array
    {
        $this->data = array_map(function ($data) {
            $data['valor'] = Utils::formataPreco($data['valor']);
            return $data;
        }, $this->data);

        return $this->data;
    }
}