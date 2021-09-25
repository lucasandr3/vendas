<?php

namespace App\repository;

use App\interfaces\repository\AjaxRepositoryInterface;
use App\Models\Usuario;
use Illuminate\Database\Capsule\Manager as DB;
use App\Models\Ajax;
use App\Models\PontoVenda;
use App\Models\Produto;

class AjaxRepository implements AjaxRepositoryInterface
{
    public function abreCaixa($dados)
    {
        $caixa = new PontoVenda();
        $caixa->valor_open = $dados->amount;
        $caixa->day = $dados->data_open;

        if ($caixa->save()) {
            return ['code' => 0, 'msg' => 'Caixa Aberto com Sucesso.'];
        } else {
            return ['code' => 1, 'msg' => 'Algo deu errado, tente novamente.'];
        }
    }

    public function listaProdutos($dados)
    {
        $text = $dados->q;
        return DB::table('produtos')
            ->where('nome_prod', 'LIKE', '%' . $text . '%')
        ->get();
    }

    public function verificaSenhaDesconto($senha, $user)
    {

        $usuario = Usuario::where('id_user', $user)->first();

        if (password_verify($senha, $usuario->senha_desconto)) {
            return ['code' => 0];
        } else {
            die;
        }
    
    }
}