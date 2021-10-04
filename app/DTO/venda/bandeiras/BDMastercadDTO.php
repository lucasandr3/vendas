<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDMastercadDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'mastercad_credito_hist_one' => Utils::formataPreco($this->data->mastercad_credito_hist_one),
            'mastercad_credito_one' => Utils::formataPreco($this->data->mastercad_credito_one),
            'mastercad__credito_hist_two' => Utils::formataPreco($this->data->mastercad_credito_hist_two),
            'mastercad__credito_two' => Utils::formataPreco($this->data->mastercad_credito_two),

            'mastercad_debito_hist_one' => Utils::formataPreco($this->data->mastercad_debito_hist_one),
            'mastercad_debito_one' => Utils::formataPreco($this->data->mastercad_debito_one),
            'mastercad__debito_hist_two' => Utils::formataPreco($this->data->mastercad_debito_hist_two),
            'mastercad__debito_two' => Utils::formataPreco($this->data->mastercad_debito_two),

            'total_historico_credito_master' => Utils::formataPreco($this->data->total_historico_credito),
            'total_credito_master' => Utils::formataPreco($this->data->total_credito),
            'total_historico_debito_master' => Utils::formataPreco($this->data->total_historico_debito),
            'total_debito_master' => Utils::formataPreco($this->data->total_debito),

            'total_desc_credito_taxa_master' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_credito, $this->data->total_credito
            ),

            'total_desc_debito_taxa_master' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_debito, $this->data->total_debito
            ),
        ];
    }
}