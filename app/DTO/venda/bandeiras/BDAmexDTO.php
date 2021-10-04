<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDAmexDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'amex_credito_hist_one' => Utils::formataPreco($this->data->amex_credito_hist_one),
            'amex_credito_one' => Utils::formataPreco($this->data->amex_credito_one),
            'amex__credito_hist_two' => Utils::formataPreco($this->data->amex_credito_hist_two),
            'amex__credito_two' => Utils::formataPreco($this->data->amex_credito_two),

            'amex_debito_hist_one' => Utils::formataPreco($this->data->amex_debito_hist_one),
            'amex_debito_one' => Utils::formataPreco($this->data->amex_debito_one),
            'amex__debito_hist_two' => Utils::formataPreco($this->data->amex_debito_hist_two),
            'amex__debito_two' => Utils::formataPreco($this->data->amex_debito_two),

            'total_historico_credito_amex' => Utils::formataPreco($this->data->total_historico_credito),
            'total_credito_amex' => Utils::formataPreco($this->data->total_credito),
            'total_historico_debito_amex' => Utils::formataPreco($this->data->total_historico_debito),
            'total_debito_amex' => Utils::formataPreco($this->data->total_debito),

            'total_desc_credito_taxa_amex' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_credito, $this->data->total_credito
            ),

            'total_desc_debito_taxa_amex' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_debito, $this->data->total_debito
            ),
        ];
    }
}