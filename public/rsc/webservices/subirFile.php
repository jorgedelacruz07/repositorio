<?php
 
$target_path = basename( $_FILES['uploadedfile']['name']);
 
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], "archivos/".$target_path)) {
    echo "Archivo ". $target_path . " subido correctamente";
} else{
    echo "Error al subir el archivo";
}
 
?>