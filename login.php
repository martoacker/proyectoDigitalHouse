<?php
if ($_POST){

  if (empty($_POST['pswd'])) {
    $error['pswd']='La contraseña es requerida';
  }
  if (empty($_POST['mail'])) {
    $error['mail']='El email es requerido';
  } else if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL)){
    $error['mail']='El email no es válido';
  }

  if(empty($error)) {
    $usuario = buscarMail($_POST);
    if($usuario){
      $verif = password_verify($_POST['pswd'], $usuario['pswd']);
      if (!$verif) {
        $error['pswd']='La clave no coincide';
      } else {
        guardarCookie($usuario);
        guardarEnSession($usuario);
        header("Location: http://localhost/php/29-9-17/index.php");
        die();
        }
    } else {
      $error['mail']='El usuario no existe, por favor registrese ' . "<a href=registro.php> aquí </a>";
      }
  }
}

function buscarMail($info){
  $usuario = [];
  $mail = $info["mail"];
  $archivo = fopen('baseDatos.json', 'r');
  while (($linea = fgets($archivo)) !== false) {
    $users = json_decode($linea, true);
    if ($users['mail'] === $mail) {
        $usuario = $users;
        break;
    }
  }
  return $usuario;
}
function guardarCookie($data) {
  if (isset($_POST["remember"])) {
    $cookie_email = $data['mail'];
    setcookie('recordar', $cookie_email, time()+3600);
    echo "Guardados los datos de session";
    return $_COOKIE['recordar'];
  }
}
function guardarEnSession($info) {
  session_start();
  $_SESSION["nombre"] = $info['nombre'];
  $_SESSION["apellido"] = $info['apellido'];
  $_SESSION["mail"] = $info['mail'];
  echo "Guardados los datos";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
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
              <h2>¡Bienvenido!</h2>
              <input type="email" <?php if (isset($error['mail'])) {echo 'class="error"';} ?> name="mail" placeholder="Correo electrónico"value="<?php if (isset($_POST['mail'])) {echo $_POST['mail'];} else if (isset($_COOKIE['recordar'])) {echo $_COOKIE['recordar'];} ?>">
              <?php if (isset($error['mail'])) {echo '<p class="debajo">'.$error['mail'].'</p>';} ?>
              <input type="password" <?php if (isset($error['pswd'])) {echo 'class="error"';} ?> name="pswd" placeholder="Contraseña" value="<?php if (isset($_POST['pswd'])) {echo $_POST['pswd'];}?>">
              <?php if (isset($error['pswd'])) {echo '<p class="debajo">'.$error['pswd'].'</p>';} ?>

              <button type="submit">Inicia sesión</button>

              <input class="deta message" type="checkbox" name="remember" <?php if (isset($_COOKIE['recordar'])) {echo "checked";}?> >
              <label class="deta message" for="remember">Recordar mis datos</label>

              <p class="message"> <a href="https://support.google.com/accounts/answer/41078?hl=es-419">| Olvidé mi contraseña |</a></p>

              <p class="message">¿No estás registrado? <a href="registro.php">Crea tu cuenta</a></p>
            </form>

        </div>
      </div>
    </section>
  </body>
</html>
