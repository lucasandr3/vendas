<?php
// Registrar o manipulador
if($_ENV['APP_ENV'] === 'development') {
    $whoops = new \Whoops\Run;
    $whoops->prependHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    return;
}

die;

