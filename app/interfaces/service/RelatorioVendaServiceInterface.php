<?php
namespace App\interfaces\service;


interface RelatorioVendaServiceInterface
{
    public function totaisVenda($data);

    public function salvaVenda($dadosVenda);
}