<?php
namespace App\Controllers;

use App\middleware\Auth;
use App\service\VendaService;
use Core\Controller;

class VendasController extends Controller
{
    private $vendaService;

    public function __construct ()
    {
      Auth::isLogged();
      $this->vendaService = new VendaService;
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
        $this->vendaService->salvaVenda($this->request());
	}
}