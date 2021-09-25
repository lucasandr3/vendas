<?php


namespace App\interfaces\repository;


interface VendaRepositoryInterface
{
    public function buscaVendas(): array;

    public function salvaDadosIniciaisVenda($dadosIniciaisVenda);

    public function buscaPagamentoVendas(array $codVendas);

    public function buscaParcelasVendas(array $codVendas): array;

    public function buscaParcelasProdutos(array $codVendas): array;
}