<?php

namespace App\repository;

use App\interfaces\repository\RelatorioVendaRepositoryInterface;
use App\Models\Despesa;
use Illuminate\Database\Capsule\Manager as DB;
use App\Models\Venda;
use App\Models\VendaPagamento;
use App\Models\VendaParcela;
use App\Models\VendaProduto;
use App\Models\RelatorioVenda;
use Utils\Utils;

class RelatorioVendaRepository implements RelatorioVendaRepositoryInterface
{
    public function totalGeralVenda(array $data): array
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->select(DB::raw('sum(vp.dinheiro) AS dinheiro'))
            ->addSelect(DB::raw('sum(vp.cartao_credito_loja_hist) AS cartao_credito_historico_one'))
            ->addSelect(DB::raw('sum(vp.cartao_credito_loja) AS cartao_credito_one'))
            ->addSelect(DB::raw('sum(vp.cartao_credito2_loja_hist) AS cartao_credito_historico_two'))
            ->addSelect(DB::raw('sum(vp.cartao_credito2_loja) AS cartao_credito_two'))
            ->addSelect(DB::raw('sum(vp.cartao_debito_loja_hist) AS cartao_debito_historico_one'))
            ->addSelect(DB::raw('sum(vp.cartao_debito_loja) AS cartao_debito_one'))
            ->addSelect(DB::raw('sum(vp.cartao_debito2_loja_hist) AS cartao_debito_historico_two'))
            ->addSelect(DB::raw('sum(vp.cartao_debito2_loja) AS cartao_debito_two'))
            ->addSelect(DB::raw('sum(vp.cartao_credito_parceiro_hist) AS cartao_credito_parceiro_historico_one'))
            ->addSelect(DB::raw('sum(vp.cartao_credito_parceiro) AS cartao_credito_parceiro_one'))
            ->addSelect(DB::raw('sum(vp.cartao_credito2_parceiro_hist) AS cartao_credito_parceiro_historico_two'))
            ->addSelect(DB::raw('sum(vp.cartao_credito2_parceiro) AS cartao_credito_parceiro_two'))
            ->addSelect(DB::raw('sum(vp.cartao_debito_parceiro_hist) AS cartao_debito_parceiro_historico_one'))
            ->addSelect(DB::raw('sum(vp.cartao_debito_parceiro) AS cartao_debito_parceiro_one'))
            ->addSelect(DB::raw('sum(vp.cartao_debito2_parceiro_hist) AS cartao_debito_parceiro_historico_two'))
            ->addSelect(DB::raw('sum(vp.cartao_debito2_parceiro) AS cartao_debito_parceiro_two'))
            ->addSelect(DB::raw('sum(vp.picpay_hist) AS picpay_historico'))
            ->addSelect(DB::raw('sum(vp.picpay) AS picpay'))
            ->addSelect(DB::raw('sum(vp.pix) AS pix'))
            ->addSelect(DB::raw('sum(vp.dinheiro) AS dinheiro'))
            ->addSelect(DB::raw('sum(vp.crediario_loja) AS crediario_loja'))
            ->addSelect(DB::raw('sum(v.desconto) AS total_desconto'))
            ->whereBetween('v.data_venda', $data)
            ->get()->toArray();
    }

    public function cartaoMastercard($data)
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist) as mastercad_credito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_credito_loja) as mastercad_credito_one'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja_hist) as mastercad_credito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja) as mastercad_credito_two'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist) as mastercad_debito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_debito_loja) as mastercad_debito_one'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja_hist) as mastercad_debito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja) as mastercad_debito_two'))
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist + cartao_credito2_loja_hist) as total_historico_credito'))
            ->addSelect(DB::raw('sum(cartao_credito_loja + cartao_credito2_loja) as total_credito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist + cartao_debito2_loja_hist) as total_historico_debito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja + cartao_debito2_loja) as total_debito'))
            ->where('vp.bandeira_cartao_loja', 'Mastercard')
            ->where(function ($query) use ($data) {
                $query->where('v.data_venda', $data);
            })
            ->get()->toArray();
    }

    public function cartaoVisa($data)
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist) as visa_credito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_credito_loja) as visa_credito_one'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja_hist) as visa_credito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja) as visa_credito_two'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist) as visa_debito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_debito_loja) as visa_debito_one'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja_hist) as visa_debito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja) as visa_debito_two'))
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist + cartao_credito2_loja_hist) as total_historico_credito'))
            ->addSelect(DB::raw('sum(cartao_credito_loja + cartao_credito2_loja) as total_credito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist + cartao_debito2_loja_hist) as total_historico_debito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja + cartao_debito2_loja) as total_debito'))
            ->where('vp.bandeira_cartao_loja', 'Visa')
            ->where(function ($query) use ($data) {
                $query->where('v.data_venda', $data);
            })
            ->get()->toArray();
    }

    public function cartaoHipercard($data)
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist) as hipercard_credito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_credito_loja) as hipercard_credito_one'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja_hist) as hipercard_credito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja) as hipercard_credito_two'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist) as hipercard_debito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_debito_loja) as hipercard_debito_one'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja_hist) as hipercard_debito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja) as hipercard_debito_two'))
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist + cartao_credito2_loja_hist) as total_historico_credito'))
            ->addSelect(DB::raw('sum(cartao_credito_loja + cartao_credito2_loja) as total_credito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist + cartao_debito2_loja_hist) as total_historico_debito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja + cartao_debito2_loja) as total_debito'))
            ->where('vp.bandeira_cartao_loja', 'Hipercard')
            ->where(function ($query) use ($data) {
                $query->where('v.data_venda', $data);
            })
            ->get()->toArray();
    }

    public function cartaoElo($data)
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist) as elo_credito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_credito_loja) as elo_credito_one'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja_hist) as elo_credito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja) as elo_credito_two'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist) as elo_debito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_debito_loja) as elo_debito_one'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja_hist) as elo_debito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja) as elo_debito_two'))
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist + cartao_credito2_loja_hist) as total_historico_credito'))
            ->addSelect(DB::raw('sum(cartao_credito_loja + cartao_credito2_loja) as total_credito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist + cartao_debito2_loja_hist) as total_historico_debito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja + cartao_debito2_loja) as total_debito'))
            ->where('vp.bandeira_cartao_loja', 'Elo')
            ->where(function ($query) use ($data) {
                $query->where('v.data_venda', $data);
            })
            ->get()->toArray();
    }

    public function cartaoCabalVale($data)
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist) as cabal_credito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_credito_loja) as cabal_credito_one'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja_hist) as cabal_credito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja) as cabal_credito_two'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist) as cabal_debito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_debito_loja) as cabal_debito_one'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja_hist) as cabal_debito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja) as cabal_debito_two'))
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist + cartao_credito2_loja_hist) as total_historico_credito'))
            ->addSelect(DB::raw('sum(cartao_credito_loja + cartao_credito2_loja) as total_credito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist + cartao_debito2_loja_hist) as total_historico_debito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja + cartao_debito2_loja) as total_debito'))
            ->where('vp.bandeira_cartao_loja', 'Cabal Vale')
            ->where(function ($query) use ($data) {
                $query->where('v.data_venda', $data);
            })
            ->get()->toArray();
    }

    public function cartaoAmex($data)
    {
        return DB::table('vendas_pagamento as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist) as amex_credito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_credito_loja) as amex_credito_one'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja_hist) as amex_credito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_credito2_loja) as amex_credito_two'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist) as amex_debito_hist_one'))
            ->addSelect(DB::raw('sum(cartao_debito_loja) as amex_debito_one'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja_hist) as amex_debito_hist_two'))
            ->addSelect(DB::raw('sum(cartao_debito2_loja) as amex_debito_two'))
            ->addSelect(DB::raw('sum(cartao_credito_loja_hist + cartao_credito2_loja_hist) as total_historico_credito'))
            ->addSelect(DB::raw('sum(cartao_credito_loja + cartao_credito2_loja) as total_credito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja_hist + cartao_debito2_loja_hist) as total_historico_debito'))
            ->addSelect(DB::raw('sum(cartao_debito_loja + cartao_debito2_loja) as total_debito'))
            ->where('vp.bandeira_cartao_loja', 'Amex')
            ->where(function ($query) use ($data) {
                $query->where('v.data_venda', $data);
            })
            ->get()->toArray();
    }

    public function despesas($data)
    {
        return Despesa::where('data_d', $data)
            ->select('descricao')
            ->addSelect('valor')
            ->get()->toArray();
    }

    public function totalDespesa($data)
    {
        return Despesa::where('data_d', $data)
            ->get()->sum('valor');
    }

    public function caixaAbertura($data)
    {
        $retorno = DB::table('open_day')
            ->select('valor_open')
            ->where('day', $data)->first();

        if($retorno === null) {
            return (Object)['valor_open' => 0.00];
        } else {
            return $retorno;
        }
    }

    public function custoBruto($data)
    {
        return DB::table('vendas_produtos as vp')
            ->join('vendas as v', 'v.id_venda', '=', 'vp.id_venda')
            ->select(DB::raw('sum(custo) as total_custo'))
            ->where('v.data_venda', $data)->first();
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