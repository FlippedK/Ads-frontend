<?php

$pdo = new PDO('mysql:host=localhost;dbname=ads_db','root','root');

if (isset($_GET['add'])) {
    include_once "api_add.php";
}

else if (isset($_GET['all'])) {
    
    $query = $pdo -> query("SELECT * FROM ads");
    $query = $query -> fetchAll(PDO::FETCH_ASSOC);

    header("Content-type: application/json; charset=utf-8");

    echo json_encode($query);
}