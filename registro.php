<?php
  if ($_POST){
    if (empty($_POST['nombre'])) {
      $error['nombre']='El nombre es requerido';
    }
    if (empty($_POST['apellido'])) {
      $error['apellido']='El apellido es requerido';
    }
    if (empty($_POST['mail'])) {
      $error['mail']='El email es requerido';
    } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)){
      $error['mail']='El email no es válido';
    }
    if (empty($_POST['pswd'])) {
      $error['pswd']='La contraseña es requerida';
    }
    if (empty($_POST['pswdVfy'])) {
      $error['pswdVfy']='La confirmación de contraseña es requerida';
    } else {
          if ($_POST['pswd']!=$_POST['pswdVfy']) {
          $error['pswdVfy']='Las contraseñas no coinciden';
          }
    }

    if(empty($error)) {
      $archivo = fopen('baseDatos.json', 'r');

      while (($linea = fgets($archivo)) !== false) {
        $users = json_decode($linea, true);
        if ($users['mail'] === $_POST['mail']) {
            $error['mail']='El email ya existe';
            break;
        }
      }

      function traerId(){
        $archivo = fopen('baseDatos.json', 'r');
        $linea = fgets($archivo);
        if($linea==false){
          return 1;
        } else {
          $user = json_decode($linea, true);
          $id = $user["id"];
          while (($linea = fgets($archivo)) !== false) {
            $user = json_decode($linea, true);
            $id = $user["id"];
          }
          return $id+1;
        }
      }

      if (empty($error)) {
        $usuario["id"] = traerId();
        $usuario['nombre'] = $_POST['nombre'];
        $usuario['apellido'] = $_POST['apellido'];
        $usuario['mail'] = $_POST['mail'];
        $usuario['pswd'] = password_hash($_POST['pswd'], PASSWORD_DEFAULT);

        $datosUsuario = json_encode($usuario).PHP_EOL;
        file_put_contents('baseDatos.json', $datosUsuario, FILE_APPEND | LOCK_EX);
        // header("Location: http://localhost/php/welcome.php");
        // die();
      }
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <?php
      include('header.php');
     ?>
    <section>
      <div class="login-page">
        <div class="form">
            <form action="" method="post" name="login">
              <h2>Crea tu cuenta</h2>

              <input type="text" <?php if (isset($error['nombre'])) {echo 'class="error"';}?> name="nombre" placeholder="Nombre" value="<?php if (isset($_POST['nombre'])) {echo $_POST['nombre'];}?>">
              <?php if (isset($error['nombre'])) {echo '<p class="debajo">'.$error['nombre'].'</p>';} ?>
              <input type="text" <?php if (isset($error['apellido'])) {echo 'class="error"';}?> name="apellido" placeholder="Apellido" value="<?php if (isset($_POST['apellido'])) {echo $_POST['apellido'];}?>">
              <?php if (isset($error['apellido'])) {echo '<p class="debajo">'.$error['apellido'].'</p>';} ?>
              <input type="email" <?php if (isset($error['mail'])) {echo 'class="error"';} ?> name="mail" placeholder="Correo electrónico" value="<?php if (isset($_POST['mail'])) {echo $_POST['mail'];}?>">
              <?php if (isset($error['mail'])) {echo '<p class="debajo">'.$error['mail'].'</p>';} ?>
              <input type="password" <?php if (isset($error['pswd'])) {echo 'class="error"';} ?> name="pswd" placeholder="Contraseña" value="<?php if (isset($_POST['pswd'])) {echo $_POST['pswd'];}?>">
              <?php if (isset($error['pswd'])) {echo '<p class="debajo">'.$error['pswd'].'</p>';} ?>
              <input type="password" <?php if (isset($error['pswdVfy'])) {echo 'class="error"';} ?> name="pswdVfy" placeholder="Verifica tu contraseña" value="">
              <?php if (isset($error['pswdVfy'])) {echo '<p class="debajo" style="margin-bottom: 0px;">'.$error['pswdVfy'].'</p>';} ?>
<br>

              <button type="submit">Registrate</button>
              <p class="message">Al registrarte, aceptas las <a href="https://www.google.com/intl/es-419_419/policies/terms/" target="_blank" >Condiciones de Servicio</a> y la <a href="https://www.google.com/intl/es-419_419/policies/privacy/" target="_blank" >Política de privacidad</a></p>
              <p class="message">¿Ya estás registrado? <a href="login.php">Inicia sesión</a></p>
            </form>

        </div>
      </div>
    </section>
  </body>
</html>
