<?php


require_once '../dao/DataTableDao.php';

$action = filter_input(INPUT_POST, 'action');

//Tabela clientes
if ($action === 'clientes') {

    $dao = new DataTableDao();
    $dao->clientesTable();

}

//Tabela veículos
if ($action === 'veiculos') {

    $dao = new DataTableDao();
    $dao->veiculosTable();

}