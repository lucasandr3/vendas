<?php

namespace App\repository;

use App\interfaces\repository\RelatorioVendaRepositoryInterface;
use Illuminate\Database\Capsule\Manager as DB;
use App\Models\Venda;
use App\Models\VendaPagamento;
use App\Models\VendaParcela;
use App\Models\VendaProduto;
use App\Models\RelatorioVenda;

class RelatorioVendaRepository implements RelatorioVendaRepositoryInterface
{
    public function dinheiro($data)
    {
        return DB::table('vendas_pagamento')
            ->join('vendas', 'vendas.id_venda', '=', 'vendas_pagamento.id_venda')
            ->select(DB::raw('sum(vendas_pagamento.crediario_loja) AS crediario_loja'))
            ->whereBetween('vendas.data_venda', ['2021-09-24', $data])
            ->get()->sum('vendas_pagamento.crediario_loja');
//        ->toSql();
    }

    public function salvaDadosIniciaisVenda($dadosIniciaisVenda)
    {
        $venda = Venda::create($dadosIniciaisVenda);
        return $venda->id_venda;
    }

    public function salvaPagamentoVenda($dadosPagamento)
    {
        return VendaPagamento::insert($dadosPagamento);
    }

    public function salvaCrediarioLoja($dadosParcelamento)
    {
        foreach ($dadosParcelamento as $parcelamento) {
            VendaParcela::insert($parcelamento);
        }
    }

    public function salvaProdutosVenda($produtosVenda)
    {
        foreach ($produtosVenda as $produto) {
            VendaProduto::insert($produto);
        }
    }

    public function deletaVenda($venda)
    {
        Venda::deleted('id_venda', $venda);
    }

    public function buscaPagamentoVendas(array $codVendas)
    {
        return VendaPagamento::whereIn('id_venda', $codVendas)->get()->toArray();
    }

    public function buscaParcelasVendas(array $codVendas): array
    {
        return VendaParcela::whereIn('id_venda', $codVendas)->get()->toArray();
    }

    public function buscaParcelasProdutos(array $codVendas): array
    {
        return VendaProduto::whereIn('id_venda', $codVendas)
            ->get()
            ->toArray();
    }
}