<?php
namespace App\Controllers;

use App\middleware\Auth;
use App\service\LoginService;
use Core\Controller;

class LoginController extends Controller
{
    private $service;
    private $flasher;

    public function __construct ()
    {
      $this->service = new LoginService;
    }

	public function index()
	{
    if(isset($_SESSION['userLogged'])) {
      $this->redirect('');
    }
    $data = [];
    view('login/login', $data);
	}

  public function signin()
  {
    $this->service->signin($this->request());
  }

  public function logout()
  {
    $this->service->logout();
  }
}