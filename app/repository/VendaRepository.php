<?php

namespace App\repository;

use App\interfaces\repository\VendaRepositoryInterface;
use Illuminate\Database\Capsule\Manager as DB;
use App\Models\Venda;
use App\Models\VendaPagamento;
use App\Models\VendaParcela;
use App\Models\VendaProduto;

class VendaRepository implements VendaRepositoryInterface
{
    public function buscaVendas(): array
    {
        return Venda::all()->toArray();
//        return Venda::with(['vendas_produtos'])->get();
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