

<h3 align="center">Formulario de inicio de sesión</h3>

<p align="center">Un formulario en php para autentificarse.</p>

## Proceso

Dende Visual Studio Code fixen o sistema de login máis simple posible con PHP. Primeiro creamos 3 arquivos de php que enlazan entre sí: sesiones_login, sesiones_logout e sesiones_principal.

Dentro de login puxen o HTML que se vai a ver e máis unha función de PHP para detectar a clave e o usuario que se introducen no formulario de login e comprobar se son correctos.



```$function comprobar_usuario(nombre, clave){
function comprobar_usuario($nombre, $clave){
    if($nombre === "usuario" and $clave === "1234"){
        $usu['nombre'] = "usuario";
        $usu['rol'] = 0;
        return $usu;
    }elseif($nombre === "admin" and $clave === "1234"){
        $usu['nombre'] = "admin";
        $usu['rol'] = 1;
        return $usu;
    }else return FALSE;
}
```

Unha vez comprobado que funciona, procedín a introducilo no noso traballo de Project Management. Primeiro borrei os enlaces de login do HTML e sustituíno polo formulario que acabo de facer. Logo, adaptei a función ao que necesitábamos nesta web e engadín unha máis para poder entrar á sección de empregados ou a sección de manager respectivamente.



```
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
```

Se entramos como Admin ou manager vamos á carpeta de manager e vemos as seccións para xefes, e se entramos como usuario ou empregado accedemos á sección de tarefas dentro da carpeta de employees, desa maneira integramos sen problema o formulario que acabamos de facer nunha web previamente feita. 



![2022-01-26 09_24_45-Window.png](C:\Users\Usuario\Desktop\2022-01-26%2009_24_45-Window.png)

![2022-01-26 09_25_44-Window.png](C:\Users\Usuario\Desktop\2022-01-26%2009_25_44-Window.png)
