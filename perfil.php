<?php
  session_start();
  echo $_SESSION['nombre'].', este es tu perfil';
 ?>

 <form action="perfil.php" method="post" enctype="multipart/form-data">
   Subir foto:<input type="file" name="imgPerfil">
   <input type="submit" value="Aceptar">
 </form>

<?php

//var_dump($_FILES);
function guardarImagen() {
  if ($_FILES["imgPerfil"]["error"] == UPLOAD_ERR_OK){
    $nombre=$_FILES["imgPerfil"]["name"];
    $archivo=$_FILES["imgPerfil"]["tmp_name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    $miArchivo = dirname(__FILE__);

    //echo "Dondes estoy ->".$miArchivo;
    $miArchivo = $miArchivo . "/img/";
    $miArchivo = $miArchivo .  $_SESSION['nombre']."." . $ext;
    move_uploaded_file($archivo, $miArchivo);
  }else{
    echo 'No se subio el archivo';
  }
}
guardarImagen();

 ?>
/php/29-9-17/img/Martin.png
<img src="<?php echo dirname(__FILE__)."/img/". $_SESSION['nombre'].".png";       ?>">
