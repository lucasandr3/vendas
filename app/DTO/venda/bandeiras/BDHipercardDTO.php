<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDHipercardDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'hipercard_credito_hist_one' => Utils::formataPreco($this->data->hipercard_credito_hist_one),
            'hipercard_credito_one' => Utils::formataPreco($this->data->hipercard_credito_one),
            'hipercard__credito_hist_two' => Utils::formataPreco($this->data->hipercard_credito_hist_two),
            'hipercard__credito_two' => Utils::formataPreco($this->data->hipercard_credito_two),

            'hipercard_debito_hist_one' => Utils::formataPreco($this->data->hipercard_debito_hist_one),
            'hipercard_debito_one' => Utils::formataPreco($this->data->hipercard_debito_one),
            'hipercard__debito_hist_two' => Utils::formataPreco($this->data->hipercard_debito_hist_two),
            'hipercard__debito_two' => Utils::formataPreco($this->data->hipercard_debito_two),

            'total_historico_credito_hipercard' => Utils::formataPreco($this->data->total_historico_credito),
            'total_credito_hipercard' => Utils::formataPreco($this->data->total_credito),
            'total_historico_debito_hipercard' => Utils::formataPreco($this->data->total_historico_debito),
            'total_debito_hipercard' => Utils::formataPreco($this->data->total_debito),

            'total_desc_credito_taxa_hipercard' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_credito, $this->data->total_credito
            ),

            'total_desc_debito_taxa_hipercard' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_debito, $this->data->total_debito
            ),
        ];
    }
}