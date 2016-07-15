<?php
/**
 * Representa el la estructura de las Alumnoss
 * almacenadas en la base de datos
 */
require 'Database.php';
class alumnos
{
    function __construct()
    {
    }
    /**
     * Retorna en la fila especificada de la tabla 'Alumnos'
     *
     * @param $idAlumno Identificador del registro
     * @return array Datos del registro
     */
    public static function getAll()
    {
        $consulta = "SELECT * FROM alumno";
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
    /**
     * Obtiene los campos de un Alumno con un identificador
     * determinado
     *
     * @param $usuario Identificador del alumno
     * @return mixed
     */
    public static function getById($usuario, $contra)
    {
        // Consulta de la tabla Alumnos
        $consulta = "SELECT id_usuario
                             FROM usuario
                             WHERE id_usuario = '$usua' and password='$contra' ";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($usuario));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            // Aquí puedes clasificar el error dependiendo de la excepción
            // para presentarlo en la respuesta Json
            return -1;
        }
    }

    public static function getA($usuario)
    {
        // Consulta de la tabla Alumnos
        $consulta = "SELECT U.nombre_usuario,U.apellidos_usuario,A.email,A.telef_contacto,
                            A.dir_fotografia,A.nivel,A.puntos_alumno,A.numero_faltas,
                            A.direccion_actual,D.nombre_distrito,S.nombre_sexo 
                             FROM sexo S JOIN usuario U ON S.id_sexo=U.id_sexo
                                            JOIN alumno A ON U.id_usuario=A.id_usuario
                                            JOIN distrito D ON A.ubigeo_distrito=D.ubigeo_distrito
                                            WHERE A.id_usuario = ? ";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute(array($usuario));
            // Capturar primera fila del resultado
            $row = $comando->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
            // Aquí puedes clasificar el error dependiendo de la excepción
            // para presentarlo en la respuesta Json
            return -1;
        }
    }
    /**
     * Actualiza un registro de la bases de datos basado
     * en los nuevos valores relacionados con un identificador
     *
     * @param $usuario      identificador
     * @param $nombre      nuevo nombre
     * @param $direccion nueva direccion
     
     */
    public static function update(
        $usuario,
        $email,
        $telef,
        $direccion
    )
    {
        // Creando consulta UPDATE
        $consulta = "UPDATE alumno
            SET email='$email', telef_contacto='$telef', direccion_actual='$direccion'  
            WHERE id_usuario='$usuario' ";
        // Preparar la sentencia
        $cmd = Database::getInstance()->getDb()->prepare($consulta);
        // Relacionar y ejecutar la sentencia
        $cmd->execute(array($email, $telefono, $direccion, $distrito, $usuario));
        return $cmd;
    }
    /**
     * Insertar un nuevo Alumno
     *
     * @param $nombre      nombre del nuevo registro
     * @param $direccion dirección del nuevo registro
     * @return PDOStatement
     */
  /*  public static function insert(
        $nombre,
        $direccion
    )
    {
        // Sentencia INSERT
        $comando = "INSERT INTO Alumnos ( " .
            "nombre," .
            " direccion)" .
            " VALUES( ?,?)";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);
        return $sentencia->execute(
            array(
                $nombre,
                $direccion
            )
        );
    }*/
    /**
     * Eliminar el registro con el identificador especificado
     *
     * @param $idAlumno identificador de la tabla Alumnos
     * @return bool Respuesta de la eliminación
     */
    /*public static function delete($idAlumno)
    {
        // Sentencia DELETE
        $comando = "DELETE FROM Alumnos WHERE idAlumno=?";
        // Preparar la sentencia
        $sentencia = Database::getInstance()->getDb()->prepare($comando);
        return $sentencia->execute(array($idAlumno));
    }*/
}
?>