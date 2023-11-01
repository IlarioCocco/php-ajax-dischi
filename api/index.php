<?php

require __DIR__ . "/../database.php";
//var_dump(($database));
//header("Content-Type: application/json");
header('Access-Control-Allow-Origin: *');

if( !empty($_GET["genre"])) {
    $genre = $_GET["genre"];

    $filtro = [];

    foreach($database as $key) {
        if($genre == $key["genre"]) {
        $filtro[] = $key;
        }
    }
    echo json_encode($filtro);
} else {
    echo json_encode($database); 
}

?>

