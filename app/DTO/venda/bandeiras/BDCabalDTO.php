<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDCabalDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'cabal_credito_hist_one' => Utils::formataPreco($this->data->cabal_credito_hist_one),
            'cabal_credito_one' => Utils::formataPreco($this->data->cabal_credito_one),
            'cabal__credito_hist_two' => Utils::formataPreco($this->data->cabal_credito_hist_two),
            'cabal__credito_two' => Utils::formataPreco($this->data->cabal_credito_two),

            'cabal_debito_hist_one' => Utils::formataPreco($this->data->cabal_debito_hist_one),
            'cabal_debito_one' => Utils::formataPreco($this->data->cabal_debito_one),
            'cabal__debito_hist_two' => Utils::formataPreco($this->data->cabal_debito_hist_two),
            'cabal__debito_two' => Utils::formataPreco($this->data->cabal_debito_two),

            'total_historico_credito_cabal' => Utils::formataPreco($this->data->total_historico_credito),
            'total_credito_cabal' => Utils::formataPreco($this->data->total_credito),
            'total_historico_debito_cabal' => Utils::formataPreco($this->data->total_historico_debito),
            'total_debito_cabal' => Utils::formataPreco($this->data->total_debito),

            'total_desc_credito_taxa_cabal' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_credito, $this->data->total_credito
            ),

            'total_desc_debito_taxa_cabal' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->total_historico_debito, $this->data->total_debito
            ),
        ];
    }
}