<?php
namespace App\repository;

use App\interfaces\repository\ClienteRepositoryInterface;
use Illuminate\Database\Capsule\Manager as DB;
use App\Models\Cliente;
use App\Models\VendaPagamento;
use App\Models\VendaParcela;
use App\Models\VendaProduto;

class ClienteRepository implements ClienteRepositoryInterface
{
    public function ativos()
    {
        return Cliente::where('status', ATIVO)->get();
    }

//    public function buscaPagamentoVendas(array $codVendas)
//    {
//        return VendaPagamento::whereIn('id_venda', $codVendas)->get()->toArray();
//    }
//
//    public function buscaParcelasVendas(array $codVendas): array
//    {
//        return VendaParcela::whereIn('id_venda', $codVendas)->get()->toArray();
//    }
//
//    public function buscaParcelasProdutos(array $codVendas): array
//    {
//        return VendaProduto::whereIn('id_venda', $codVendas)
//            ->get()
//        ->toArray();
//    }
}