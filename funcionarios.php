<?php

function findId($funcionarios, $id){
    foreach($funcionarios as $func){
        if($func['Id'] == $id){
            return $func;
        }
    }

    return null;
}

$funcionarios = [
    ['Id' => 4, 'Nome' => 'João', 'Salário' => 1500],
    ['Id' => 21, 'Nome' => 'José', 'Salário' => 1230.50],
    ['Id' => 34, 'Nome' => 'Maria', 'Salário' => 1678.54],
];

$id = $_POST['id'];

$func = findId($funcionarios, $id);

echo $func['Nome'] . ' - R$ ' . number_format($func['Salário'], 2);

?>
