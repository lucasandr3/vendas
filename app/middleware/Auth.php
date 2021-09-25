<?php
namespace App\middleware;

use Support\Authenticate;

class Auth
{
    public static function isLogged()
    {
        if (Authenticate::verifyLogin()) {
            Authenticate::redirect('login/login', []);
		}
    }
}