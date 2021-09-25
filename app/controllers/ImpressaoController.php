<?php

namespace App\Controllers;

use App\service\ImpressaoService;
use Core\Controller;

class ImpressaoController extends Controller
{
    private $ImpressaoService;

    public function __construct()
    {
        $this->ImpressaoService = new ImpressaoService;
    }

    public function index()
    {

    }
}