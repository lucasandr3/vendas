<?php
namespace App\repository;

use App\interfaces\repository\LoginRepositoryInterface;
use App\Models\Store;
use App\Models\User;
use Support\Authenticate;
use Support\StoreUsed;
use Utils\Utils;

class LoginRepository implements LoginRepositoryInterface
{
    public function all()
    {
        return User::all();
    }

    public function login(Object $request)
    {
       $user = User::where('email_user', $request->email)->first();

       if($user) {

            if (password_verify($request->password, $user->senha)) {
                Authenticate::setUser($user);
                $store = Store::where('id_company', $user->id_company)->first();
                StoreUsed::setStore($store);
                Authenticate::redirectHome('');
            } else {
                Authenticate::redirect('login/login', [
                    'type' => 'error', 
                    'title' => 'Aviso', 
                    'text' => 'Login e/ou senha errados.'
                    ]
                );
            }

       } else {
            Authenticate::redirect('login/login', [
                'type' => 'error', 
                'title' => 'Aviso', 
                'text' => 'Login e/ou senha errados.'
                ]
            );
       }
       
    }

    public function logout()
    {
        Authenticate::logout();
        Authenticate::redirect('login/login', []);
    }
}