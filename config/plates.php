<?php
use League\Plates\Engine;
use Support\StoreUsed;
use Support\Authenticate;

function render($view, $data=null)
{
    $store = (Object)StoreUsed::getStore();
    $user = (Object)Authenticate::getUser();

    $templates = new Engine('themes/layout'.LAYOUT);
    $templates->addData(['company' => $store->nome, 'username' => $user->nome, 'email' => $user->email], 'template');
    $templates->addFolder('tema', 'themes/theme'.THEME);
    echo $templates->render('tema::'.$view, $data);

    if(isset($data['message'])) {
        sweetAlert($data['message']);
    }
}

function view($view, $data=null)
{
    $templates = new Engine('themes/theme'.THEME);
    echo $templates->render($view, ['data' => $data]);

    if(isset($data['message'])) {
        sweetAlert($data['message']);
    }
}