<?php

namespace App\Controllers;

use App\service\ImpressaoService;
use App\service\RelatorioVendaService;
use Core\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use Utils\Utils;


class ImpressaoController extends Controller
{
    private $ImpressaoService;
    private $relatorioVendaService;

    public function __construct()
    {
        $this->ImpressaoService = new ImpressaoService;
        $this->relatorioVendaService = new RelatorioVendaService;
    }

    public function vendaDiario($dataFiltro, $who)
    {
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

        ob_start();
        switch ($who) {
            case 'loja':
                view('impressao/vendadiario', [
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
                break;
            case 'parceiro':
                view('impressao/vendadiarioparceiro', [
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
                break;
            default:
                    view('impressao/vendadiariomatriz', [
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
                break;
        }
        $html = ob_get_contents();
        ob_end_clean();

        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('relatório do dia '.$dataFiltro.'.pdf', ["Attachment" => false]);
    }
}