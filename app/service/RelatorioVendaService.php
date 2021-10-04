<?php
namespace App\service;

use App\DTO\venda\bandeiras\BDAmexDTO;
use App\DTO\venda\bandeiras\BDCabalDTO;
use App\DTO\venda\bandeiras\BDEloDTO;
use App\DTO\venda\bandeiras\BDHipercardDTO;
use App\DTO\venda\bandeiras\BDMastercadDTO;
use App\DTO\venda\bandeiras\BDTotalBandeirasDTO;
use App\DTO\venda\bandeiras\BDVisaDTO;
use App\DTO\venda\despesas\DespesasDTO;
use App\DTO\venda\PagamentosDTO;
use App\interfaces\service\RelatorioVendaServiceInterface;
use App\repository\ProdutoRepository;
use App\repository\RelatorioVendaRepository;
use Utils\Utils;


class RelatorioVendaService implements RelatorioVendaServiceInterface
{
    private $repository;
    private $produtosRepository;

    public function __construct ()
    {
        $this->repository = new RelatorioVendaRepository;
        $this->produtosRepository = new ProdutoRepository;
    }

    public function totaisVenda($data): PagamentosDTO
    {
        $pagamentos = $this->repository->totalGeralVenda($data);
        return new PagamentosDTO($pagamentos);
    }

    public function cartaoMastercard($data): BDMastercadDTO
    {
        $mastercard = $this->repository->cartaoMastercard($data);
        return new BDMastercadDTO($mastercard);
    }

    public function cartaoVisa($data): BDVisaDTO
    {
        $visa = $this->repository->cartaoVisa($data);
        return new BDVisaDTO($visa);
    }

    public function cartaoHipercard($data): BDHipercardDTO
    {
        $hipercard = $this->repository->cartaoHipercard($data);
        return new BDHipercardDTO($hipercard);
    }

    public function cartaoElo($data): BDEloDTO
    {
        $elo = $this->repository->cartaoElo($data);
        return new BDEloDTO($elo);
    }

    public function cartaoCabalVale($data): BDCabalDTO
    {
        $cabal = $this->repository->cartaoCabalVale($data);
        return new BDCabalDTO($cabal);
    }

    public function cartaoAmex($data): BDAmexDTO
    {
        $amex = $this->repository->cartaoAmex($data);
        return new BDAmexDTO($amex);
    }

    public function despesas($data): DespesasDTO
    {
        $despesas = $this->repository->despesas($data);
        return new DespesasDTO($despesas);
    }

    public function totalDespesa($data)
    {
        return Utils::formataPreco($this->repository->totalDespesa($data));
    }

    public function caixaAbertura($data)
    {
        return Utils::formataPreco($this->repository->caixaAbertura($data)->valor_open);
    }
    
    public function custoBruto($data)
    {
        return Utils::formataPreco($this->repository->custoBruto($data)->total_custo);
    }

    public function totalGeralBandeiras($bandeiras)
    {
        return new BDTotalBandeirasDTO($bandeiras);
    }

    public function salvaVenda($dadosVenda)
    {
        // dados iniciais da venda
        $dadosIniciaisVenda = [
            'vendedor' => (int)$dadosVenda->vendedor_venda,
            'parceiro' => (int)$dadosVenda->parceiro_venda,
            'cliente' => (int)$dadosVenda->cliente_venda,
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
            'dinheiro' => (float)$dadosVenda->dinheiro ?? null,
            // cartao de credito loja
            'cartao_credito_loja_hist' => (float)$dadosVenda->cartao_credito_one ?? null,
            'cartao_credito_loja' => Utils::valorCalculado($dadosVenda->cartao_credito_one, $dadosVenda->cartao_credito_bandeira_one) ?? null,
            'taxa_credito_loja' => Utils::taxaVenda($dadosVenda->cartao_credito_bandeira_one) ?? null,
            'parcela_credito_loja' => Utils::qtdeParcelaVenda($dadosVenda->cartao_credito_bandeira_one) ?? null,
            'bandeira_cartao_loja' => Utils::bandeiraVenda($dadosVenda->cartao_credito_bandeira_one) ?? null,
            // 2 cartao de credito loja
            'cartao_credito2_loja_hist' => (float)$dadosVenda->cartao_credito_two ?? null,
            'cartao_credito2_loja' => Utils::valorCalculado($dadosVenda->cartao_credito_two, $dadosVenda->cartao_credito_bandeira_two) ?? null,
            'taxa_credito2_loja' => Utils::taxaVenda($dadosVenda->cartao_credito_bandeira_two) ?? null,
            'parcela_credito2_loja' => Utils::qtdeParcelaVenda($dadosVenda->cartao_credito_bandeira_two) ?? null,
            'bandeira_credito2_loja' => Utils::bandeiraVenda($dadosVenda->cartao_credito_bandeira_two) ?? null,
            // cartao de debito loja
            'cartao_debito_loja_hist' => (float)$dadosVenda->cartao_debito_one ?? null,
            'cartao_debito_loja' => Utils::valorCalculado($dadosVenda->cartao_debito_one, $dadosVenda->cartao_debito_bandeira_one) ?? null,
            'taxa_debito_loja' => Utils::taxaVenda($dadosVenda->cartao_debito_bandeira_one) ?? null,
            'bandeira_debito_loja' => Utils::bandeiraVenda($dadosVenda->cartao_debito_bandeira_one) ?? null,
            // 2 cartao de debito loja
            'cartao_debito2_loja_hist' => (float)$dadosVenda->cartao_debito_two ?? null,
            'cartao_debito2_loja' => Utils::valorCalculado($dadosVenda->cartao_debito_two, $dadosVenda->cartao_debito_bandeira_two) ?? null,
            'taxa_debito2_loja' => Utils::taxaVenda($dadosVenda->cartao_debito_bandeira_two) ?? null,
            'bandeira_debito2_loja' => Utils::bandeiraVenda($dadosVenda->cartao_debito_bandeira_two) ?? null,
            // cartao de credito fornecedor
            'cartao_credito_parceiro_hist' => (float)$dadosVenda->cartao_credito_fornecedor_one ?? null,
            'cartao_credito_parceiro' => (float)$dadosVenda->cartao_credito_fornecedor_one ?? null,
            // 2 cartao de credito fornecedor
            'cartao_credito2_parceiro_hist' => (float)$dadosVenda->cartao_credito_fornecedor_two ?? null,
            'cartao_credito2_parceiro' => (float)$dadosVenda->cartao_credito_fornecedor_two ?? null,
            // cartao de debito fornecedor
            'cartao_debito_parceiro_hist' => (float)$dadosVenda->cartao_debito_fornecedor_one ?? null,
            'cartao_debito_parceiro' => (float)$dadosVenda->cartao_debito_fornecedor_one ?? null,
            // 2 cartao de debito fornecedor
            'cartao_debito2_parceiro_hist' => (float)$dadosVenda->cartao_debito_fornecedor_two ?? null,
            'cartao_debito2_parceiro' => (float)$dadosVenda->cartao_debito_fornecedor_two ?? null,
            // pix
            'pix' => (float)$dadosVenda->pix ?? null,
            // picpay
            'picpay_hist' => (float)$dadosVenda->picapay ?? null,
            'picpay' => Utils::valorCalculado($dadosVenda->picapay, $dadosVenda->picpay_taxa) ?? null,
            'taxa_picpay' => Utils::taxaVenda($dadosVenda->picpay_taxa) ?? null,
            'parcela_picpay' => Utils::qtdeParcelaVenda($dadosVenda->picpay_taxa) ?? null,
            // crediario loja
            'crediario_loja' => (float)$dadosVenda->crediario_loja ?? null,
            'parcela_crediario_loja' => (int)$dadosVenda->crediario_loja_parcela ?? null
        ];

        $pagamento = $this->repository->salvaPagamentoVenda($dadosPagamento);

        if(!$pagamento) {
            $this->repository->deletaVenda($venda);
            return;
        }

        $dadosParcelamento = [];
        $count = 0;
        for ($i=0; $i < (int)$dadosVenda->crediario_loja_parcela; $i++) {
            $data = date('Y-m-d', strtotime('+' .$count++. 'month', strtotime($dadosVenda->crediario_vencimento)));
            $dadosParcelamento[$i]['id_venda'] = 10;
            $dadosParcelamento[$i]['id_cliente'] = (int)$dadosVenda->cliente_venda;
            $dadosParcelamento[$i]['quantidade_parcelas'] = (int)$dadosVenda->crediario_loja_parcela;
            $dadosParcelamento[$i]['valor_parcela'] = (float)$dadosVenda->crediario_loja / (int)$dadosVenda->crediario_loja_parcela;
            $dadosParcelamento[$i]['vencimento'] = $data;
        }

        $this->repository->salvaCrediarioLoja($dadosParcelamento);

        $produtosIds = array_column($dadosVenda->products_v, 'id_prod');
        $produtosVenda = (array)$dadosVenda->products_v;

        $produtos = $this->produtosRepository->todosId($produtosIds);
        $vendaProdutosAgrupados = arrayGroupBy('id_prod', $produtos);
        $produtosFormatado = [];

        foreach ($produtosVenda as $key => $value) {
            foreach ($vendaProdutosAgrupados as $k => $v) {
                if($v[0]['id_prod'] == $value['id_prod']) {
                    $produtosFormatado[$key]['id_venda'] = 12;
                    $produtosFormatado[$key]['id_produto'] = (int)$value['id_prod'];
                    $produtosFormatado[$key]['quantidade'] = (int)$value['qtd'];
                    $produtosFormatado[$key]['valor_vendido'] = (float)$value['preco_venda'];
                    $produtosFormatado[$key]['total_vendido'] = (float)$value['preco_venda'] * (int)$value['qtd'];
                    $produtosFormatado[$key]['custo'] = (float)$v[0]['cost'];
                }
            }
        }

        $this->repository->salvaProdutosVenda($produtosFormatado);
    }
}