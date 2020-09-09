<?php
## Database configuration
include '../config/Conexao.php';

class DataTableDao
{

    public function clientesTable()
    {

        $conn = new Conexao();
        $con = $conn->getConection();
/* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

## Read value
        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = $_POST['search']['value']; // Search value

## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (nome like '%" . $searchValue . "%' or
        email like '%" . $searchValue . "%' or
        celular like'%" . $searchValue . "%' ) ";
        }

## Total number of records without filtering
        $sel = mysqli_query($con, "select count(*) as allcount from clientes");
        $records = mysqli_fetch_assoc($sel);
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = mysqli_query($con, "select count(*) as allcount from clientes WHERE 1 " . $searchQuery);
        $records = mysqli_fetch_assoc($sel);
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = "select * from clientes WHERE 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
        $empRecords = mysqli_query($con, $empQuery);
        $data = array();

        while ($row = mysqli_fetch_assoc($empRecords)) {
            $data[] = array(
                "id" => $row['id'],
                "nome" => $row['nome'],
                "celular" => $row['celular'],
                "email" => $row['email'],
                "updated_at" => $row['updated_at'],

            );
        }

## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
        );

        echo json_encode($response);
    }

    #######################
    //Tabela de veículos
    public function veiculosTable()
    {

        $conn = new Conexao();
        $con = $conn->getConection();
/* check connection */
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }

## Read value
        $draw = $_POST['draw'];
        $row = $_POST['start'];
        $rowperpage = $_POST['length']; // Rows display per page
        $columnIndex = $_POST['order'][0]['column']; // Column index
        $columnName = $_POST['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
        $searchValue = $_POST['search']['value']; // Search value

## Search
        $searchQuery = " ";
        if ($searchValue != '') {
            $searchQuery = " and (modelo like '%" . $searchValue . "%' or
        marca like '%" . $searchValue . "%' or
        placa like '%" . $searchValue . "%' or
        categoria like'%" . $searchValue . "%' ) ";
        }

## Total number of records without filtering
        $sel = mysqli_query($con, "select count(*) as allcount from veiculos");
        $records = mysqli_fetch_assoc($sel);
        $totalRecords = $records['allcount'];

## Total number of record with filtering
        $sel = mysqli_query($con, "select count(*) as allcount from veiculos WHERE 1 " . $searchQuery);
        $records = mysqli_fetch_assoc($sel);
        $totalRecordwithFilter = $records['allcount'];

## Fetch records
        $empQuery = "select * from veiculos WHERE 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
        $empRecords = mysqli_query($con, $empQuery);
        $data = array();

        while ($row = mysqli_fetch_assoc($empRecords)) {
            $data[] = array(
                "id" => $row['id'],
                "modelo" => $row['modelo'],
                "marca" => $row['marca'],
                "placa" => $row['placa'],
                "categoria" => $row['categoria'],
               // "id" => $row['id'],
            );
        }

## Response
        $response = array(
            "draw" => intval($draw),
            "iTotalRecords" => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordwithFilter,
            "aaData" => $data,
        );

        echo json_encode($response);

    }
}
