<?php


namespace App\DTO\venda;

use JsonSerializable;
use Utils\Utils;

class PagamentosDTO implements JsonSerializable
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data[0];
    }

    public function jsonSerialize(): array
    {
        return [
            'dinheiro' => Utils::formataPreco($this->data->dinheiro),
            'cartao_credito_loja_historico' => Utils::calculaTotal($this->data->cartao_credito_historico_one, $this->data->cartao_credito_historico_two),
            'cartao_credito_loja' => Utils::calculaTotal($this->data->cartao_credito_one, $this->data->cartao_credito_two),
            'total_taxa_paga_credito' => Utils::calculaTotalTaxaPago(
                $this->data->cartao_credito_historico_one, $this->data->cartao_credito_historico_two,
                $this->data->cartao_credito_one, $this->data->cartao_credito_two
            ),

            'cartao_debito_loja_historico' => Utils::calculaTotal($this->data->cartao_debito_historico_one, $this->data->cartao_debito_historico_two),
            'cartao_debito_loja' => Utils::calculaTotal($this->data->cartao_debito_one, $this->data->cartao_debito_two),
            'total_taxa_paga_debito' => Utils::calculaTotalTaxaPago(
                $this->data->cartao_debito_historico_one, $this->data->cartao_debito_historico_two,
                $this->data->cartao_debito_one, $this->data->cartao_debito_two
            ),

            'cartao_credito_parceiro_historico' => Utils::calculaTotal($this->data->cartao_credito_parceiro_historico_one, $this->data->cartao_credito_parceiro_historico_two),
            'cartao_credito_parceiro' => Utils::calculaTotal($this->data->cartao_credito_parceiro_one, $this->data->cartao_credito_parceiro_two),

            'cartao_debito_parceiro_historico' => Utils::calculaTotal($this->data->cartao_debito_parceiro_historico_one, $this->data->cartao_debito_parceiro_historico_two),
            'cartao_debito_parceiro' => Utils::calculaTotal($this->data->cartao_debito_parceiro_one, $this->data->cartao_debito_parceiro_two),

            'picpay_historico' => Utils::formataPreco($this->data->picpay_historico),
            'picpay' => Utils::formataPreco($this->data->picpay),
            'total_taxa_paga_picpay' => Utils::calculaTotalTaxaPagoTwo(
                $this->data->picpay_historico, $this->data->picpay,
            ),

            'pix' => Utils::formataPreco($this->data->pix),
            'crediario_loja' => Utils::formataPreco($this->data->crediario_loja),

            'total_descontado_taxa' => Utils::calculaTotalDescontoTaxa([
                    $this->data->cartao_credito_one, $this->data->cartao_credito_two,
                    $this->data->cartao_debito_one, $this->data->cartao_debito_two,
                    $this->data->cartao_credito_parceiro_one, $this->data->cartao_credito_parceiro_two,
                    $this->data->cartao_debito_parceiro_one, $this->data->cartao_debito_parceiro_two,
                    $this->data->picpay, $this->data->pix, $this->data->crediario_loja,
                    $this->data->dinheiro
                ]
            ),

            'total_sem_desconto_taxa' => Utils::calculaTotalSemDescontoTaxa([
                    $this->data->cartao_credito_historico_one, $this->data->cartao_credito_historico_two,
                    $this->data->cartao_debito_historico_one, $this->data->cartao_debito_historico_two,
                    $this->data->cartao_credito_parceiro_historico_one, $this->data->cartao_credito_parceiro_historico_two,
                    $this->data->cartao_debito_parceiro_historico_one, $this->data->cartao_debito_parceiro_historico_two,
                    $this->data->picpay_historico, $this->data->pix, $this->data->crediario_loja,
                    $this->data->dinheiro
                ]
            ),

            'total_fornecedor_credito' => Utils::calculaTotalParceiroCredito(
                    $this->data->cartao_credito_parceiro_one, $this->data->cartao_credito_parceiro_two
            ),

            'total_fornecedor_debito' => Utils::calculaTotalParceiroDebito(
                    $this->data->cartao_debito_parceiro_one, $this->data->cartao_debito_parceiro_two
            ),

            'total_desconto' => Utils::formataPreco($this->data->total_desconto)
        ];
    }
}