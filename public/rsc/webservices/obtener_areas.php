<?php
/**
 * Obtiene todas las alumnos de la base de datos
 */
require 'AreaDeConocimiento.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Manejar petición GET
    $areas = Areas::obtenerAreas();
    if ($areas) {
        $datos["estado"] = 1;
        $datos["areas"] = $areas;
        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
}
?>