<?php
namespace App\service;

use App\interfaces\service\HomeServiceInterface;
use App\repository\HomeRepository;


class HomeService implements HomeServiceInterface
{
    private $repository;

    public function __construct ()
    {
        $this->repository = new HomeRepository;
    }

    public function all()
    {
//        $data = [];
//        $data['title'] = 'Pátio de Espera';
//        $data['menu'] = 'espera';
//        $data['submenu'] = 'subrec';
        $data['clientes'] = $this->repository->all();

        return $data;
    }
}