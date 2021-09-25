<?php

namespace App\Controllers;

use App\service\EstoqueService;
use Core\Controller;

class EstoqueController extends Controller
{
    private $EstoqueService;

    public function __construct()
    {
        $this->EstoqueService = new EstoqueService;
    }

    public function index()
    {

    }
}