<?php
namespace App\interfaces\service;


interface RelatorioVendaServiceInterface
{
    public function totaisVenda($data);

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

    public function totalGeralBandeiras($bandeiras);

    public function salvaVenda($dadosVenda);
}