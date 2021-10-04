<?php

function url($param)
{
    return BASE_URL . $param;
}

function redirect($route)
{
    return header("Location: " . BASE_URL . $route);
}

//function setStore($store)
//{
//    $_SESSION['storeFocus'] = $store;
//}

//function getStore()
//{
//    $object = new stdClass();
//    foreach ($_SESSION['storeFocus'] as $key => $value) {
//        $object->$key = $value;
//    }
//    return $object;
//}

// function dd($var)
// {
//     echo "<pre style='padding: 10px;background-color: #212121;color: #ffffff;border: 1px solid #fff;border-radius: 10px;'>";
//     print_r($var);
//     exit;
// }
function arrayGroupBy($key, $data, $column = null)
{
    $result = array();

    foreach ($data as $val) {
        $newArray = !empty($column) ? $val[$column] : $val;

        if (array_key_exists($key, $val)) {
            $result[$val[$key]][] = $newArray;
        } else {
            $result[""][] = $newArray;
        }
    }

    return $result;
}

function bandeirasCartao($dados)
{
    return "{$dados['qt_parc']} Parcela(s) - Taxa - {$dados['taxa_v']}%";
}

function bandeirasValueCartao($dados)
{
    return "{$dados['qt_parc']},{$dados['taxa_v']}%";
}

function moeda($valor)
{
    return "R$ ". number_format($valor, 2, ",", ".");
}

function dataFormatada($data)
{
    return date('d-m-Y', strtotime($data));
}

function contaSimples($v1, $v2)
{
    $v1f = substr($v1,3);
    $v1f = (float)str_replace(',', '.', $v1f);
    $v1f = round($v1f, 2);
    $v2f = substr($v2,3);
    $v2f = (float)str_replace(',', '.', $v2f);
    $v2f = round($v2f, 2);

    $vFinal = ($v2f - $v1f);
    return $vFinal = "R$ " . number_format($vFinal, 2, ',', '.');
}
