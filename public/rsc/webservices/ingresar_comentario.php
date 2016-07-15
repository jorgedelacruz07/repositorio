<?php
/**
 * Actualiza un alumno especificado por su identificador
 */
require 'AreaDeConocimiento.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Decodificando formato Json
    $body = json_decode(file_get_contents("php://input"), true);
    // Actualizar alumno
    $retorno = Areas::ingresar(
        $body['id_comentario'],
        $body['descripcion'],
        $body['votos_favor'],
        $body['votos_contra'],
        $body['id_cursoXprof'],
        $body['id_usuario']);
    if ($retorno) {
        $json_string = json_encode(array("estado" => 1,"mensaje" => "Actualizacion correcta"));
		echo $json_string;
    } else {
        $json_string = json_encode(array("estado" => 2,"mensaje" => "No se actualizo el registro"));
		echo $json_string;
    }
}
?>