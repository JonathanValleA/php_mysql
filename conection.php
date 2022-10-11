<?php 
$db_host = "localhost";
$db_nombre = "products";
$db_usuario = "root";
$db_passwd = "";

    $connexio = mysqli_connect($db_host, $db_nombre, $db_usuario, $db_passwd);
    
    $consulta = "SELECT * FROM PRODUCTO";

    $products = mysqli_query($connexio, $consulta);

?>