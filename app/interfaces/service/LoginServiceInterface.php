<?php
namespace App\interfaces\service;


interface LoginServiceInterface
{
    public function all();
    public function signin(Object $request);
    public function logout();
}