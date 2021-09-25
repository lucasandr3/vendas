<?php
namespace App\Controllers;

use App\middleware\Auth;
use App\service\ClienteService;
use Core\Controller;

class ClienteController extends Controller
{
    private $clienteService;

    public function __construct ()
    {
      Auth::isLogged();
      $this->clienteService = new ClienteService;
    }

	public function ativos()
	{
        $clientes = $this->clienteService->clientesAtivos();

        render('clientes/ativos', [
            'clientes' => $clientes
        ]);
	}

    public function novo()
    {
        //$clientes = $this->clienteService->clientesAtivos();

        render('clientes/novo', [
            //'clientes' => $clientes
        ]);
    }
}