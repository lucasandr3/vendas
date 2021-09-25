<?php
namespace App\service;

use App\interfaces\service\LoginServiceInterface;
use App\repository\LoginRepository;
use Support\Authenticate;

class LoginService implements LoginServiceInterface
{
    private $repository;

    public function __construct ()
    {
        $this->repository = new LoginRepository;
    }

    public function all()
    {
        $data['clientes'] = $this->repository->all();
        return $data;
    }

    public function signin(Object $request)
    {
        if(!empty($request->email)) {
            
            $this->repository->login($request);
        }

        Authenticate::redirect('login/login', [
            'type' => 'error', 
            'title' => 'Aviso', 
            'text' => 'Dados informados incorretos.'
            ]
        );
    }

    public function logout()
    {
        $this->repository->logout();
    }
}