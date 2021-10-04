<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDEloDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'elo_credito_hist_one' => Utils::formataPreco($this->data->elo_credito_hist_one),
            'elo_credito_one' => Utils::formataPreco($this->data->elo_credito_one),
            'elo__credito_hist_two' => Utils::formataPreco($this->data->elo_credito_hist_two),
            'elo__credito_two' => Utils::formataPreco($this->data->elo_credito_two),

            'elo_debito_hist_one' => Utils::formataPreco($this->data->elo_debito_hist_one),
            'elo_debito_one' => Utils::formataPreco($this->data->elo_debito_one),
            'elo__debito_hist_two' => Utils::formataPreco($this->data->elo_debito_hist_two),
            'elo__debito_two' => Utils::formataPreco($this->data->elo_debito_two),

            'total_historico_credito_elo' => Utils::formataPreco($this->data->total_historico_credito),
            'total_credito_elo' => Utils::formataPreco($this->data->total_credito),
            'total_historico_debito_elo' => Utils::formataPreco($this->data->total_historico_debito),
            'total_debito_elo' => Utils::formataPreco($this->data->total_debito),

            'total_desc_credito_taxa_elo' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_credito, $this->data->total_credito
            ),

            'total_desc_debito_taxa_elo' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_debito, $this->data->total_debito
            ),
        ];
    }
}