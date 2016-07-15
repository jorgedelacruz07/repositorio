<?php
/**
 * Obtiene el detalle de un alumno especificado por
 * su identificador "idalumno"
 */

require 'AreaDeConocimiento.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['curprofid']) ){
        // Obtener parámetro usuario
        $parametro = $_GET['curprofid'];
    
        // Tratar retorno
        $retorno = Areas::obtenerArchivosxProfe($parametro);
        if ($retorno) {
            $alumno["estado"] = 1;		// cambio "1" a 1 porque no coge bien la cadena.
            $alumno["archivos"] = $retorno;
            // Enviar objeto json del alumno
            print json_encode($alumno);
        } else {
            // Enviar respuesta de error general
            print json_encode(
                array(
                    'estado' => '2',
                    'mensaje' => 'No se obtuvo el registro'
                )
            );
        }
    } else {
        // Enviar respuesta de error
        print json_encode(
            array(
                'estado' => '3',
                'mensaje' => 'Se necesita un identificador'
            )
        );
    }
}

?>