<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDVisaDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'visa_credito_hist_one' => Utils::formataPreco($this->data->visa_credito_hist_one),
            'visa_credito_one' => Utils::formataPreco($this->data->visa_credito_one),
            'visa__credito_hist_two' => Utils::formataPreco($this->data->visa_credito_hist_two),
            'visa__credito_two' => Utils::formataPreco($this->data->visa_credito_two),

            'visa_debito_hist_one' => Utils::formataPreco($this->data->visa_debito_hist_one),
            'visa_debito_one' => Utils::formataPreco($this->data->visa_debito_one),
            'visa__debito_hist_two' => Utils::formataPreco($this->data->visa_debito_hist_two),
            'visa__debito_two' => Utils::formataPreco($this->data->visa_debito_two),

            'total_historico_credito_visa' => Utils::formataPreco($this->data->total_historico_credito),
            'total_credito_visa' => Utils::formataPreco($this->data->total_credito),
            'total_historico_debito_visa' => Utils::formataPreco($this->data->total_historico_debito),
            'total_debito_visa' => Utils::formataPreco($this->data->total_debito),

            'total_desc_credito_taxa_visa' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_credito, $this->data->total_credito
            ),

            'total_desc_debito_taxa_visa' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_debito, $this->data->total_debito
            ),
        ];
    }
}