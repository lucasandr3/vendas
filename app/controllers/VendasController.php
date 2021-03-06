<?php

namespace App\Controllers;

use App\middleware\Auth;
use App\service\ClienteService;
use App\service\ParceiroService;
use App\service\TaxaService;
use App\service\UsuarioService;
use App\service\VendaService;
use Core\Controller;
use Support\Authenticate;

class VendasController extends Controller
{
    private $vendaService;
    private $clienteService;
    private $parceiroService;
    private $usuarioService;
    private $taxaService;

    public function __construct()
    {
        Auth::isLogged();
        $this->vendaService = new VendaService;
        $this->clienteService = new ClienteService;
        $this->parceiroService = new ParceiroService;
        $this->usuarioService = new UsuarioService;
        $this->taxaService = new TaxaService;
    }

    public function index()
    {

        $data = [];

        $data['nome'] = 'Lucas';

        $vendas = $this->vendaService->buscaTodasVendas();

        render('vendas/vendas', [
            'vendas' => $vendas
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