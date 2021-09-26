<?php
namespace App\Controllers;

use App\middleware\Auth;
use App\service\HomeService;
use Core\Controller;
use Support\Authenticate;
use Utils\Utils;

class HomeController extends Controller
{
    private $homeService;

    public function __construct ()
    {
      Auth::isLogged();
      $this->homeService = new HomeService;
    }

	public function index()
	{
        $data = [];

        $data['nome'] = 'Lucas';
        $this->redirect('pdv', [
                'type' => 'success',
                'title' => 'Aviso',
                'text' => 'Login e/ou senha errados.'
            ]
        );
//        render('home/home', []);

	}
}