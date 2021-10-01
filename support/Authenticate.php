<?php
namespace Support;

class Authenticate
{
    public function __construct()
    {
        return $_SESSION['userLogged'] = null;
    }

    public static function verifyLogin()
    {
       if(isset($_SESSION['userLogged'])) {
            return false;
       } else {
           return true;
           self::redirect('login/login', []);
       }
    }

    public static function setUser($user)
    {
        $newUser = [
            'id' => $user->id_user,
            'nome' => $user->nome_user,
            'email' => $user->email_user
        ];

        self::session($newUser);
    }

    public static function getUser()
    {
        return $_SESSION['userLogged'] ?? null;
    }

    private static function session($user)
    {
        $_SESSION['userLogged'] = $user;
    }

    public static function redirect($route, $message = null)
	{
	    if(isset($message) && !empty($message)) {
            view($route, ['message' => $message]);
        } else {
            if($route === 'login/login') {
                header("Location: ".$_ENV['APP_URL'].'login');
            } else {
                header("Location: ".$_ENV['APP_URL'].$route);
            }
        }

	}

    public static function redirectHome($route)
	{
		header("Location: ".$_ENV['APP_URL'].$route);
		exit;
	}

    public static function logout()
    {
        unset($_SESSION['userLogged']);
    }
}