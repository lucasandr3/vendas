<?php


namespace App\interfaces\repository;


interface LoginRepositoryInterface
{
    public function all();
    public function login(object $request);
    public function logout();
}