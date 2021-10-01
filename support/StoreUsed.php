<?php
namespace Support;

class StoreUsed
{
    public function __construct()
    {
        return $_SESSION['userStore'] = null;
    }

    public static function setStore($store)
    {
        $newStore = [
            'id' => $store->id,
            'id_company' => $store->id_company,
            'nome' => $store->name_store,
        ];

        self::session($newStore);
    }

    public static function getStore()
    {
        return $_SESSION['userStore'] ?? null;
    }

    private static function session($store)
    {
        $_SESSION['userStore'] = $store;
    }

}