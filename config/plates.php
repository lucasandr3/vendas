<?php
use League\Plates\Engine;
use Support\StoreUsed;
use Support\Authenticate;

function render($view, $data=null)
{
    $store = (Object)StoreUsed::getStore() ?? null;
    $user = (Object)Authenticate::getUser() ?? null;

    $templates = new Engine('themes/layout'.LAYOUT);
    $templates->addData([
        'company' => $store->nome ?? null,
        'username' => $user->nome ?? null,
        'email' => $user->email ?? null
        ],
'template');
    $templates->addFolder('tema', 'themes/theme'.THEME);
    echo $templates->render('tema::'.$view, $data);

    if(isset($data['message'])) {
        sweetAlert($data['message']);
    }
}

function view($view, $data=null)
{
    $templates = new Engine('themes/theme'.THEME);
    echo $templates->render($view, $data);

    if(isset($data['message'])) {
        sweetAlert($data['message']);
    }
}