<?php


namespace App\interfaces\repository;


interface RelatorioVendaRepositoryInterface
{
    public function totalGeralVenda(array $data): array;

    public function cartaoMastercard($data);

    public function cartaoVisa($data);

    public function cartaoHipercard($data);

    public function cartaoElo($data);

    public function cartaoCabalVale($data);

    public function cartaoAmex($data);

    public function despesas($data);

    public function totalDespesa($data);

    public function caixaAbertura($dataFiltro);

    public function custoBruto($data);

    public function salvaDadosIniciaisVenda($dadosIniciaisVenda);

    public function salvaPagamentoVenda($dadosPagamento);

    public function salvaCrediarioLoja($dadosParcelamento);

    public function salvaProdutosVenda($produtosVenda);

    public function deletaVenda($venda);

    public function buscaPagamentoVendas(array $codVendas);

    public function buscaParcelasVendas(array $codVendas): array;

    public function buscaParcelasProdutos(array $codVendas): array;
}