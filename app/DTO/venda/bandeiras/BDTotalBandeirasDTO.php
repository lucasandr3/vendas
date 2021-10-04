<?php


namespace App\DTO\venda\bandeiras;

use JsonSerializable;
use Utils\Utils;

class BDTotalBandeirasDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $bandeiras)
    {
        $this->data = $bandeiras;
    }

    public function jsonSerialize(): array
    {
        return [
            'total_bandeiras_credito_taxa' => Utils::contaSimplesArray([
                $this->data[0]['total_credito_master'],
                $this->data[1]['total_credito_visa'],
                $this->data[2]['total_credito_hipercard'],
                $this->data[3]['total_credito_elo'],
                $this->data[4]['total_credito_cabal'],
                $this->data[5]['total_credito_amex'],
            ]),

            'total_bandeiras_credito_sem_taxa' => Utils::contaSimplesArray([
                $this->data[0]['total_historico_credito_master'],
                $this->data[1]['total_historico_credito_visa'],
                $this->data[2]['total_historico_credito_hipercard'],
                $this->data[3]['total_historico_credito_elo'],
                $this->data[4]['total_historico_credito_cabal'],
                $this->data[5]['total_historico_credito_amex'],
            ]),

            'total_bandeiras_credito_taxa_paga' => Utils::contaSimplesArray([
                $this->data[0]['total_desc_credito_taxa_master'],
                $this->data[1]['total_desc_credito_taxa_visa'],
                $this->data[2]['total_desc_credito_taxa_hipercard'],
                $this->data[3]['total_desc_credito_taxa_elo'],
                $this->data[4]['total_desc_credito_taxa_cabal'],
                $this->data[5]['total_desc_credito_taxa_amex'],
            ]),

            'total_bandeiras_debito_taxa' => Utils::contaSimplesArray([
                $this->data[0]['total_debito_master'],
                $this->data[1]['total_debito_visa'],
                $this->data[2]['total_debito_hipercard'],
                $this->data[3]['total_debito_elo'],
                $this->data[4]['total_debito_cabal'],
                $this->data[5]['total_debito_amex'],
            ]),

            'total_bandeiras_debito_sem_taxa' => Utils::contaSimplesArray([
                $this->data[0]['total_historico_debito_master'],
                $this->data[1]['total_historico_debito_visa'],
                $this->data[2]['total_historico_debito_hipercard'],
                $this->data[3]['total_historico_debito_elo'],
                $this->data[4]['total_historico_debito_cabal'],
                $this->data[5]['total_historico_debito_amex'],
            ]),

            'total_bandeiras_debito_taxa_paga' => Utils::contaSimplesArray([
                $this->data[0]['total_desc_debito_taxa_master'],
                $this->data[1]['total_desc_debito_taxa_visa'],
                $this->data[2]['total_desc_debito_taxa_hipercard'],
                $this->data[3]['total_desc_debito_taxa_elo'],
                $this->data[4]['total_desc_debito_taxa_cabal'],
                $this->data[5]['total_desc_debito_taxa_amex'],
            ]),

//            'visa_credito_hist_one' => Utils::formataPreco($this->data->visa_credito_hist_one),
//            'visa_credito_one' => Utils::formataPreco($this->data->visa_credito_one),
//            'visa__credito_hist_two' => Utils::formataPreco($this->data->visa_credito_hist_two),
//            'visa__credito_two' => Utils::formataPreco($this->data->visa_credito_two),
//
//            'visa_debito_hist_one' => Utils::formataPreco($this->data->visa_debito_hist_one),
//            'visa_debito_one' => Utils::formataPreco($this->data->visa_debito_one),
//            'visa__debito_hist_two' => Utils::formataPreco($this->data->visa_debito_hist_two),
//            'visa__debito_two' => Utils::formataPreco($this->data->visa_debito_two),
//
//            'total_historico_credito_visa' => Utils::formataPreco($this->data->total_historico_credito),
//            'total_credito_visa' => Utils::formataPreco($this->data->total_credito),
//            'total_historico_debito_visa' => Utils::formataPreco($this->data->total_historico_debito),
//            'total_debito_visa' => Utils::formataPreco($this->data->total_debito),
//
//            'total_desc_credito_taxa_visa' => Utils::calculaTotalTaxaPagoTwo(
//                $this->data->total_historico_credito, $this->data->total_credito
//            ),
//
//            'total_desc_debito_taxa_visa' => Utils::calculaTotalTaxaPagoTwo(
//                $this->data->total_historico_debito, $this->data->total_debito
//            ),
        ];
    }
}