<?php
include './conexion.php';
$metodo = $_SERVER['REQUEST_METHOD'];
$id=$_GET['sensor'];
if ($metodo == 'GET') {


    $sql = "SELECT * FROM `mediciones` WHERE `idSensor`='$id'";
    $result = mysqli_query($conn, $sql);
    $resultado=array();
    $i=0;
    while ($fila = mysqli_fetch_array($result)) {
        $respuesta = [];
        $respuesta["temperatura"] = $fila ["temperatura"];
        $respuesta["humedad"] = $fila ["humedad"];
        $respuesta["salinidad"] = $fila ["salinidad"];
        $respuesta["luminosidad"] = $fila ["luminosidad"];
        $respuesta["hora"] = $fila ["hora"];
        $respuesta["fecha"] = $fila ["fecha"];

        $resultado[$i]=$respuesta;
        $i++;

    }
    echo json_encode($resultado);



}
