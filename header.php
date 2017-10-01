<?php
session_start();
?>

<header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
        <?php
        if(isset($_SESSION["nombre"]) && isset($_SESSION["apellido"]) && isset($_SESSION["mail"])){ ?>
          <li><a href="perfil.php"><?php echo $_SESSION["nombre"]; ?></a></li>
          <li><a href="logout.php">Logout</a></li>
        <?php }else{ ?>
          <li><a href="login.php">Login</a></li>
          <li><a href="registro.php">Registro</a></li>
        <?php } ?>
      <li><a href="preguntasFrecuentes.php">Ayuda</a></li>
    </ul>
  </nav>
</header>
