<?php

namespace App\Controllers;

use App\middleware\Auth;
use App\service\ClienteService;
use App\service\ParceiroService;
use App\service\PontoVendaService;
use App\service\TaxaService;
use App\service\UsuarioService;
use Core\Controller;
use Support\Authenticate;

class PontoVendaController extends Controller
{
    private $pontoVendaService;
    private $clienteService;
    private $parceiroService;
    private $usuarioService;
    private $taxaService;

    public function __construct()
    {
        Auth::isLogged();
        $this->pontoVendaService = new PontoVendaService;
        $this->clienteService = new ClienteService;
        $this->parceiroService = new ParceiroService;
        $this->usuarioService = new UsuarioService;
        $this->taxaService = new TaxaService;
    }

    public function index()
    {
        $caixaAbertoFechado = $this->pontoVendaService->isOpen();

        if($caixaAbertoFechado) {

            $clientes   = $this->clienteService->clientesAtivos();
            $parceiros  = $this->parceiroService->todosAtivos();
            $vendedores = $this->usuarioService->todosAtivos();
            $taxas = $this->taxaService->todasAtivas();

            render('pontovenda/pdv', [
                'clientes' => $clientes,
                'parceiros' => $parceiros,
                'vendedores' => $vendedores,
                'taxas' => (Object)$taxas,
                'user_id' => Authenticate::getUser()['id']
            ]);

        } else {
            render('pontovenda/abrecaixa', []);
        }
    }
}