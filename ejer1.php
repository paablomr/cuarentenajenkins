<?php

$dbConn = new mysqli("localhost","root","","vehiculos");
if (isset($_GET["q"])){
    $tipoVehiculo = $_GET["q"];
    $idVehiculosResult = $dbConn->query("SELECT id FROM vehiculos WHERE tipo='" . $tipoVehiculo . "'");
    $listadoHTMLIds = "<ul>";
    while ($idVehiculo = $idVehiculosResult->fetch_assoc())
        $listadoHTMLIds .= "<li>".$idVehiculo['id']."</li>";
    $listadoHTMLIds .= "</ul>";
    echo $listadoHTMLIds;
} else if (isset($_GET["id"])){
    $idVehiculo = $_GET["id"];
    $datosVehiculoResult = $dbConn->query("SELECT tipo,id,propietario,dni,estado FROM vehiculos WHERE id='".$idVehiculo."'");
    $listadoHTMLVehiculo = "<ul>";
    while ($datosVehiculo = $datosVehiculoResult->fetch_assoc()) {
        $listadoHTMLVehiculo .= "<li>" . $datosVehiculo['tipo'] . "</li>";
        $listadoHTMLVehiculo .= "<li>" . $datosVehiculo['id']."</li>";
        $listadoHTMLVehiculo .= "<li>" . $datosVehiculo['propietario']."</li>";
        $listadoHTMLVehiculo .= "<li>" . $datosVehiculo['dni']."</li>";
        $listadoHTMLVehiculo .= "<li>" . $datosVehiculo['estado']."</li>";
    }
    $listadoHTMLVehiculo .= "</ul>";
    echo utf8_encode($listadoHTMLVehiculo);
}