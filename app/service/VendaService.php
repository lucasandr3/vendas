<?php
namespace App\service;

use App\interfaces\service\VendaServiceInterface;
use App\repository\VendaRepository;


class VendaService implements VendaServiceInterface
{
    private $repository;

    public function __construct ()
    {
        $this->repository = new VendaRepository;
    }

    public function buscaTodasVendas()
    {
        $vendas = $this->repository->buscaVendas();
        $codVendas = array_column($vendas, 'id_venda');

         $vendaPagamento = $this->repository->buscaPagamentoVendas($codVendas);

         foreach ($vendaPagamento as $key => $value) {
             $vendas[$key]['pagamento'] = $value;
         }

        // $vendaParcelas = $this->repository->buscaParcelasVendas($codVendas);

        $vendaProdutos = $this->repository->buscaParcelasProdutos($codVendas);
        $vendaProdutosAgrupados = arrayGroupBy('id_venda', $vendaProdutos);

        foreach ($vendas as $key => $value) {
            foreach ($vendaProdutosAgrupados as $k => $v) {
                if($v[0]['id_venda'] === $value['id_venda']) {
                    $vendas[$key]['produtos'] = $v;
                }
            }
        }

        return $vendas;
    }

    public function salvaVenda($dadosVenda)
    {
        echo "<pre>";
        var_dump($dadosVenda);
        echo "</pre>";
        die;
        // dados iniciais da venda
        $dadosIniciaisVenda = [
            'id_vendedor' => $dadosVenda->vendedor_venda,
            'id_parceiro' => $dadosVenda->parceiro_venda,
            'id_cliente' => $dadosVenda->cliente_venda,
            'subtotal' => $dadosVenda->total_venda + (float)$dadosVenda->desconto,
            'total' => (float)$dadosVenda->total_venda,
            'desconto' => (float)$dadosVenda->desconto,
            'observacao' => $dadosVenda->observacao,
            'data_venda' => $dadosVenda->data_venda,
        ];

        $venda = $this->repository->salvaDadosIniciaisVenda($dadosIniciaisVenda);

        //dados de pagamento venda
        $dadosPagamento = [
            'id_venda' => $venda,
            'dinheiro' => $dadosVenda->dinheiro,
        ];


        echo "<pre>";
        var_dump($venda);
        echo "</pre>";
        die;
    }
}