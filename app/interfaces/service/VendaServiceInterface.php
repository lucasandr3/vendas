<?php
namespace App\interfaces\service;


interface VendaServiceInterface
{
    public function buscaTodasVendas();

    public function salvaVenda($dadosVenda);
}