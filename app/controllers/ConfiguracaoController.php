<?php

namespace App\Controllers;

use App\service\ConfiguracaoService;
use Core\Controller;

class ConfiguracaoController extends Controller
{
    private $ConfiguracaoService;

    public function __construct()
    {
        $this->ConfiguracaoService = new ConfiguracaoService;
    }

    public function index()
    {

    }
}