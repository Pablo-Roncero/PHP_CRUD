<?php

// Connecting to the database through the class 'Conectar'

require_once("Connect.php");

$base = Conectar::conexion();

$tamaño_pagina = 3;  // This variable will let us add the number of records that we want for page

/* This conditional lead us to the first page in case "pagina"'s variable is already set and equals, 
If it equals a different one it will record the value from the url */

if(isset($_GET["pagina"])) {

    if ($_GET["pagina"] == 1) {
        header("location:index.php");
    } else {
        $pagina = $_GET['pagina'];
    }

} else {
    $pagina = 1;
}

/* Creating the query to select users and creating two variables to set the number of pages we'll have
regarding the number of records in the database */

$empezar_desde = ($pagina - 1) * $tamaño_pagina;

$sql_total = "SELECT * FROM CRUD_USUARIOS";

$resultado = $base->prepare($sql_total);

$resultado->execute(array());

$num_filas = $resultado->rowCount();

$total_paginas = ceil($num_filas / $tamaño_pagina);

?>