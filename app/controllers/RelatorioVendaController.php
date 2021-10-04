<?php

namespace App\Controllers;

use App\middleware\Auth;
use App\service\ClienteService;
use App\service\ParceiroService;
use App\service\RelatorioVendaService;
use App\service\TaxaService;
use App\service\UsuarioService;
use App\service\VendaService;
use Core\Controller;
use Support\Authenticate;
use Utils\Utils;

class RelatorioVendaController extends Controller
{
    private $relatorioVendaService;
    private $vendaService;
    private $clienteService;
    private $parceiroService;
    private $usuarioService;
    private $taxaService;

    public function __construct()
    {
        Auth::isLogged();
        $this->relatorioVendaService = new RelatorioVendaService;
        $this->vendaService = new VendaService;
        $this->clienteService = new ClienteService;
        $this->parceiroService = new ParceiroService;
        $this->usuarioService = new UsuarioService;
        $this->taxaService = new TaxaService;
    }

    public function diario()
    {
        $dataInicial = Utils::verificaDataRelatorioDia($this->request());
        $dataFiltro = array($dataInicial, $dataInicial);

        $totalGeral = $this->relatorioVendaService->totaisVenda($dataFiltro)->jsonSerialize();
        $mastercard = $this->relatorioVendaService->cartaoMastercard($dataFiltro)->jsonSerialize();
        $visa = $this->relatorioVendaService->cartaoVisa($dataFiltro)->jsonSerialize();
        $hipercard = $this->relatorioVendaService->cartaoHipercard($dataFiltro)->jsonSerialize();
        $elo = $this->relatorioVendaService->cartaoElo($dataFiltro)->jsonSerialize();
        $cabal = $this->relatorioVendaService->cartaoCabalVale($dataFiltro)->jsonSerialize();
        $amex = $this->relatorioVendaService->cartaoAmex($dataFiltro)->jsonSerialize();
        $bandeiras = [$mastercard, $visa, $hipercard, $elo, $cabal, $amex];

        $despesas = $this->relatorioVendaService->despesas($dataFiltro)->jsonSerialize();
        $totalDespesa = $this->relatorioVendaService->totalDespesa($dataFiltro);

        $abriuCaixa = $this->relatorioVendaService->caixaAbertura($dataFiltro);
        $custoBruto = $this->relatorioVendaService->custoBruto($dataFiltro);

        $totalGeralBandeiras = $this->relatorioVendaService->totalGeralBandeiras($bandeiras)->jsonSerialize();

        render('vendas_relatorio/diario', [
            'dataFiltro' => $dataFiltro,
            'totalGeral' => (Object)$totalGeral,
            'mastercard' => (Object)$mastercard,
            'visa' => (Object)$visa,
            'hipercard' => (Object)$hipercard,
            'elo' => (Object)$elo,
            'cabal' => (Object)$cabal,
            'amex' => (Object)$amex,
            'despesas' => $despesas,
            'totalDespesa' => $totalDespesa,
            'abriuCaixa' => $abriuCaixa,
            'custoBruto' => $custoBruto,
            'totalBandeiras' => (Object)$totalGeralBandeiras
        ]);
    }

    public function mensal()
    {
        $dataInicial = Utils::verificaDataRelatorioDataInicial($this->request());
        $dataFinal = Utils::verificaDataRelatorioDataFinal($this->request());
        $dataFiltro = array($dataInicial, $dataFinal);

        $totalGeral = $this->relatorioVendaService->totaisVenda($dataFiltro)->jsonSerialize();
        $mastercard = $this->relatorioVendaService->cartaoMastercard($dataFiltro)->jsonSerialize();
        $visa = $this->relatorioVendaService->cartaoVisa($dataFiltro)->jsonSerialize();
        $hipercard = $this->relatorioVendaService->cartaoHipercard($dataFiltro)->jsonSerialize();
        $elo = $this->relatorioVendaService->cartaoElo($dataFiltro)->jsonSerialize();
        $cabal = $this->relatorioVendaService->cartaoCabalVale($dataFiltro)->jsonSerialize();
        $amex = $this->relatorioVendaService->cartaoAmex($dataFiltro)->jsonSerialize();
        $bandeiras = [$mastercard, $visa, $hipercard, $elo, $cabal, $amex];

        $despesas = $this->relatorioVendaService->despesas($dataFiltro)->jsonSerialize();
        $totalDespesa = $this->relatorioVendaService->totalDespesa($dataFiltro);

        $abriuCaixa = $this->relatorioVendaService->caixaAbertura($dataFiltro);
        $custoBruto = $this->relatorioVendaService->custoBruto($dataFiltro);

        $totalGeralBandeiras = $this->relatorioVendaService->totalGeralBandeiras($bandeiras)->jsonSerialize();

        render('vendas_relatorio/mensal', [
            'dataFiltro' => $dataFiltro,
            'totalGeral' => (Object)$totalGeral,
            'mastercard' => (Object)$mastercard,
            'visa' => (Object)$visa,
            'hipercard' => (Object)$hipercard,
            'elo' => (Object)$elo,
            'cabal' => (Object)$cabal,
            'amex' => (Object)$amex,
            'despesas' => $despesas,
            'totalDespesa' => $totalDespesa,
            'abriuCaixa' => $abriuCaixa,
            'custoBruto' => $custoBruto,
            'totalBandeiras' => (Object)$totalGeralBandeiras
        ]);
    }

    public function nova()
    {
        $vendaCompleta = $this->vendaService->salvaVenda($this->request());

        $clientes = $this->clienteService->clientesAtivos();
        $parceiros = $this->parceiroService->todosAtivos();
        $vendedores = $this->usuarioService->todosAtivos();
        $taxas = $this->taxaService->todasAtivas();

        if ($vendaCompleta) {

            $this->redirect('pdv', [
                    'type' => 'success',
                    'title' => 'Aviso',
                    'text' => 'Login e/ou senha errados.'
                ]
            );
        } else {

            $this->redirect('pdv', [
                    'type' => 'error',
                    'title' => 'Aviso',
                    'text' => 'Login e/ou senha errados.'
                ]
            );
        }
    }
}