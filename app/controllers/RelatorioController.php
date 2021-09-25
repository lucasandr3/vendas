<?php

namespace App\Controllers;

use App\service\RelatorioService;
use Core\Controller;

class RelatorioController extends Controller
{
    private $relatorioService;

    public function __construct()
    {
        $this->relatorioService = new RelatorioService;
    }

    public function index()
    {

    }
}