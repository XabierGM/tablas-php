<?php
// /formulario de login habitual 
// si va bien abre sesión, guarda el nombre de usuario y redirige a principal.php 
// si va mal, mensaje de error/
function comprobar_usuario($nombre, $clave){
    if($nombre === "usuario" and $clave === "1234"){
        $usu['nombre'] = "usuario";
        $usu['rol'] = 0;
        return $usu;
    }elseif($nombre === "employee" and $clave === "1234"){
        $usu['nombre'] = "employee";
        $usu['rol'] = 1;
        return $usu;
    }else return FALSE;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = comprobar_usuario($_POST['usuario'], $_POST['clave']);
    if($usu==FALSE){
        $err = TRUE;
        $usuario = $_POST['usuario'];
    }else{
        session_start();
        $_SESSION['usuario'] = $_POST['usuario'];
        header("Location: employee/tasks.php");
    }
}

function comprobar_manager($nombre, $clave){
  if($nombre === "manager" and $clave === "1234"){
      $usu['nombre'] = "manager";
      $usu['rol'] = 0;
      return $usu;
  }elseif($nombre === "admin" and $clave === "1234"){
      $usu['nombre'] = "admin";
      $usu['rol'] = 1;
      return $usu;
  }else return FALSE;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $usu = comprobar_manager($_POST['usuario'], $_POST['clave']);
  if($usu==FALSE){
      $err = TRUE;
      $usuario = $_POST['usuario'];
  }else{
      session_start();
      $_SESSION['usuario'] = $_POST['usuario'];
      header("Location: manager/clients.php");
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Simple Project Management | phpGrid</title>
</head>
<body>

<style>
  *{
    background-color: lightgreen;
  }
.centered {
  font-family: verdana;
    margin: 0;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align:center;
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
</style>

<div class="centered">
<h1>My Simple Project Management</h1>

<?php if(isset($_GET["redirigido"])){
            echo "<p>Haga login para continuar</p>";
        }?>
        <?php if(isset($err) and $err == true){
            echo "<p> revise usuario y contraseña</p>";
        }?>
        <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Usuario
        <input value = "<?php if(isset($usuario))echo $usuario;?>"
        id = "usuario" name = "usuario" type = "text">
        Clave
        <input id="clave" name = "clave" type = "password">
        <input type="submit">
        </form>
</div>

<div class="footer"><strong>Build-From-Scratch Series</strong> | phpGrid &copy; <?php echo date('Y'); ?>.</div>

</body>
</html>