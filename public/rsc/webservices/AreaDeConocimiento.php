<?php
require 'Database.php';
/**
* 
*/
class Areas
{
	
	function __construct()
	{
		# code...
	}

	public static function obtenerAreas(){
	   
	    $consulta = "SELECT nombre_area,id_area FROM area";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();
            return $comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
	}

	public static function obtenerComentarios(){
	   
	    $consulta = "SELECT P.nombre_prof,P.apell_prof,C.nombre_curso,CO.id_usuario,CO.descripcion
	                       FROM profesor P JOIN cursoxprofesor CP ON P.id_profesor=CP.id_profesor
	                                       JOIN curso C ON CP.id_curso=C.id_curso 
	                                       JOIN comentario CO ON CP.id_cursoXprof=CO.id_cursoXprof ";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();
            return $comando->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
	}

	public static function obtenerCursosxArea($id_area){
		$consulta = "SELECT C.nombre_curso,C.num_creditos,TC.nombre_tipo_curso,C.id_curso
                             FROM curso C JOIN tipo_curso TC ON C.id_tipo_curso=TC.id_tipo_curso
                              WHERE id_area = '$id_area' ";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();
            // Capturar primera fila del resultado
         return $comando->fetchAll(PDO::FETCH_ASSOC);          
        } catch (PDOException $e) {
            // Aquí puedes clasificar el error dependiendo de la excepción
            // para presentarlo en la respuesta Json
            return false;
        }
	}

	public static function obtenerProfesxCurso($id_curso){
		$consulta = "SELECT CP.id_cursoXprof,P.nombre_prof,P.apell_prof
                             FROM cursoxprofesor CP JOIN profesor P ON CP.id_profesor=P.id_profesor
                              WHERE id_curso = '$id_curso' ";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();
            // Capturar primera fila del resultado
         return $comando->fetchAll(PDO::FETCH_ASSOC);          
        } catch (PDOException $e) {
            // Aquí puedes clasificar el error dependiendo de la excepción
            // para presentarlo en la respuesta Json
            return false;
        }
	}

    public static function obtenerArchivosxProfe($curprofid){
        $consulta = "SELECT D.fecha_subida,D.estado_doc,D.direccion_archivo,D.votos_favor,D.votos_contra,TD.nombre_tipo_doc,ED.nombre_extension_doc  
                            FROM documento D JOIN tipo_documento TD ON TD.id_tipo_doc=D.id_tipo_doc
                                             JOIN extension_doc ED ON D.id_extension_doc=ED.id_extension_doc
                                             WHERE D.id_cursoXprof='$curprofid' ";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();
            // Capturar primera fila del resultado
           
        return $comando->fetchAll(PDO::FETCH_ASSOC);        
        } catch (PDOException $e) {
            // Aquí puedes clasificar el error dependiendo de la excepción
            // para presentarlo en la respuesta Json
            return false;
        }
    }

    public static function ingresar(
        $id_comentario,
        $descripcion,
        $votos_favor,
        $votos_contra,
        $id_cursoXprof,
        $id_usuario)
    {
        // Creando consulta UPDATE
        $consulta = "INSERT INTO comentario ("."id_comentario,"."descripcion,"."votos_favor,"."votos_contra,"."id_cursoXprof,"."id_usuario)"."VALUES (?,?,?,?,?,?)";
        
        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);
        // Relacionar y ejecutar la sentencia
        $cmd->execute(array( $id_comentario,$descripcion,$votos_favor,$votos_contra,$id_cursoXprof,$id_usuario));
          return $cmd;
    }
}
?>